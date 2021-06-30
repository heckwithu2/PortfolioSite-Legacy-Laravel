import { makeStyles} from "@material-ui/core";
import { globalLoadingProgress } from "../../Themes";



export const useStyles = makeStyles((theme, progress) => ({
    progressBar: {
        margin: `0px`,
        padding: `0px`,
        height: `3px`,
        width: `100%`,
        backgroundColor: theme.categories.blue.main,
    },
    blackProgressBar: {
        margin: `0px`,
        padding: `0px`,
        height: `3px`,
        width: `calc(${globalLoadingProgress}% - ${progress}}%)`,
        backgroundColor: theme.palette.primary.main,
    }
}));