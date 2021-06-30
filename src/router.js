import { BrowserRouter, Redirect, Route, Switch } from "react-router-dom";
import {ConnectedRouter} from "connected-react-router";
import { 
    HOME,
} from "./routes";
import HomeScreen from "./Screens/HomeScreen/homeScreen";
import BaseScreen from "./Screens/BaseScreen/baseScreen";

function Router({history}) {
    return (
        <ConnectedRouter history={history}>
            <BrowserRouter>
                <Switch>
                    <Route path={HOME}>
                        <BaseScreen screen={<HomeScreen/>}/>
                    </Route>
                    <Route path={""}>
                        <Redirect to={HOME}/>
                    </Route>
                </Switch>
            </BrowserRouter>
        </ConnectedRouter>
    )
}

export default Router;