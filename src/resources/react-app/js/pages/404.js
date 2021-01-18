import React from 'react';
import {Link} from "react-router-dom";

class NotFound extends React.Component {
    constructor(props) {
        super(props);

        this.state = {};
    }

    render() {
        return (
            <div id="layoutError">
                <div id="layoutError_content">
                    <main>
                        <div className="container">
                            <div className="row justify-content-center">
                                <div className="col-lg-6">
                                    <div className="text-center mt-4">
                                        <img className="mb-4 img-error" src="/images/error-404-monochrome.webp"/>
                                        <p className="lead">This requested URL was not found on this server.</p>
                                        <Link to="/dashboard">Return to Dashboard</Link>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        );
    }
}

export default NotFound;
