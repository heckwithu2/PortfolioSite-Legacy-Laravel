import Router from "./router";
import {MuiThemeProvider} from "@material-ui/core";
import {lightTheme, darkTheme} from "./Themes";

function App(props) {
  const {history, initTheme} = props;
  const globalLoadingProgressDynamic = 0;

  return (
   
      <MuiThemeProvider
        progress={globalLoadingProgressDynamic}
        theme={
          initTheme === "Dark"
          ? lightTheme
          : darkTheme}>
              <Router history={history}/>
      </MuiThemeProvider>
  );
}

export default App;
