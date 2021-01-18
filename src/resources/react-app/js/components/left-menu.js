import React from 'react';
import {Link} from 'react-router-dom';
import {connect} from 'react-redux';

const opened = {display: 'none'};
const closed = {display: 'block'};

class LeftMenu extends React.Component {
    constructor(props) {
        super(props);

        this.state = {
            authUser: {id: null, name: null, email: null},
            dropdownTournaments: false
        };

        this.handleDropdown = this.handleDropdown.bind(this);
    }

    componentDidUpdate(prevProps) {
        if (this.props.authUser !== prevProps.authUser) {
            this.setState({authUser: this.props.authUser})
        }
    }

    handleDropdown(event) {
        event.preventDefault();

        switch (event.target.id) {
            case 'tournaments':
                this.setState({dropdownTournaments: !this.state.dropdownTournaments});
                break;
        }
    }

    render() {
        return (
            <div id="layoutSidenav_nav">
                <nav className="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div className="sb-sidenav-menu">
                        <div className="nav">
                            <div className="sb-sidenav-menu-heading">Основное</div>

                            <Link className="nav-link" to="/">
                                <div className="sb-nav-link-icon">
                                    <i className="fas fa-tachometer-alt"/>
                                </div>
                                Главная
                            </Link>

                            <div className="sb-sidenav-menu-heading">Турниры</div>

                            <Link to="#" className="nav-link collapsed" id="tournaments" onClick={this.handleDropdown}>
                                <div className="sb-nav-link-icon">
                                    <i className="fas fa-book-open"/>
                                </div>
                                Турниры
                                <div className="sb-sidenav-collapse-arrow">
                                    {this.state.dropdownTournaments ? <i className="fas fa-angle-right"/> :
                                        <i className="fas fa-angle-down"/>}
                                </div>
                            </Link>
                            <div className="collapse" style={this.state.dropdownTournaments ? closed : opened}>
                                <nav className="sb-sidenav-menu-nested nav">
                                    <Link className="nav-link" to="/tournaments/all">Список турниров</Link>
                                    <Link className="nav-link" to="/tournaments/active">Активные турниры</Link>
                                    <Link className="nav-link" to="/tournaments/ended">Завершенные турниры</Link>
                                    <Link className="nav-link" to="/tournaments/archived">Архивные турниры</Link>
                                </nav>
                            </div>

                            <div className="sb-sidenav-menu-heading">Дополнительно</div>

                            <Link to="/charts" className="nav-link">
                                <div className="sb-nav-link-icon">
                                    <i className="fas fa-chart-area"/>
                                </div>
                                Статистика</Link>
                            <a className="nav-link" href="tables.html">
                                <div className="sb-nav-link-icon">
                                    <i className="fas fa-cogs"/>
                                </div>
                                Настройки</a>
                        </div>
                    </div>

                    {this.state.authUser.name != null ?
                        <div className="sb-sidenav-footer">
                            <div className="small">Авторизирован как:</div>
                            {this.state.authUser.name}
                        </div> : null}
                </nav>
            </div>
        )
    };
}

const mapStateToProps = (state) => {
    return {
        authUser: state.Auth.user
    }
};

export default connect(mapStateToProps)(LeftMenu);
