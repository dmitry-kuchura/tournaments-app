import React from 'react'
import {Route} from 'react-router'
import Main from '../main';

const PublicRoute = ({component: Component, ...rest}) => (
    <Route {...rest} render={props => (
        <Main>
            <Component {...props} />
        </Main>
    )}/>
);

export default PublicRoute;
