import { makeStyles} from "@material-ui/core";
import { globalSpacing, globalBorderRadius } from "../../Themes";

export const useStyles = makeStyles((theme) => ({
    category: {
        margin: `${globalSpacing/2}px`,
        paddingTop: `0px`,
        height: `auto`,
        minHeight: `250px`,
        background: `linear-gradient(217deg, ${theme.palette.background.gradientBlue}, ${theme.palette.background.gradientRed} 70.71%),
        linear-gradient(127deg, ${theme.palette.background.gradientBlue}, ${theme.palette.background.gradientRed} 70.71%),
        linear-gradient(336deg, ${theme.palette.background.gradientBlue}, ${theme.palette.background.gradientRed} 70.71%)`,   
        borderRadius: `${globalBorderRadius}px`,
        border: `3px solid ${theme.palette.primary.main}`,
        textAlign: `center`,
    },
    categoryTitle: {
        margin: `${globalSpacing/0}px`,
        maxHeight: `25%`,
        minHeight: `15%`,
        padding: `10px`,
        width: `100%`,
        textAlign: `left`,
        borderBottom: `3px solid ${theme.categories.blue.main}`,
        color: theme.text.primary,
        fontWeight: `bolder`,
        cursor: `pointer`,
    },
}));