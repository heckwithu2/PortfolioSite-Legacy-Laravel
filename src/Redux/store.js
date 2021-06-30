import {applyMiddleware, createStore as createReduxStore} from '@reduxjs/toolkit';
import { routerMiddleware } from 'connected-react-router';
import createRootReducer from "./reducer";
import {createBrowserHistory} from "history";
import {composeWithDevTools} from "redux-devtools-extension";
// ========================================

//const store = configureStore({reducer: allReducers})
//export default store

export default function createStore(preloadedState) {
    const history = createBrowserHistory();

    const rootReducer = createRootReducer(history);

    const middleware = [
        routerMiddleware(history),
    ]

    const store = createReduxStore(
        rootReducer,
        preloadedState,
        composeWithDevTools(applyMiddleware(...middleware)),
    )

    return { store, history };
}