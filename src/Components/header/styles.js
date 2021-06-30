import { makeStyles} from "@material-ui/core";
import { globalSpacing, globalBorderRadius  } from "../../Themes";

export const useStyles = makeStyles((theme) => ({
    header: {
        marginLeft: `${globalSpacing/2}px`,
        marginRight: `${globalSpacing/2}px`,
        marginTop: `${globalSpacing/2}px`,
        marginBottom: `${globalSpacing/2}px`,
        padding: `0px`,
        background: `linear-gradient(217deg, ${theme.palette.background.gradientBlue}, ${theme.palette.background.gradientRed} 70.71%),
        linear-gradient(127deg, ${theme.palette.background.gradientBlue}, ${theme.palette.background.gradientRed} 70.71%),
        linear-gradient(336deg, ${theme.palette.background.gradientBlue}, ${theme.palette.background.gradientRed} 70.71%)`,        //backgroundColor: theme.palette.background.gradientPurple,
        height: `auto`,
        minHeight: `15vh`,
        borderRadius: `${globalBorderRadius}px`,
        border: `3px solid ${theme.palette.primary.main}`,
    },
    icon: {
        height: `35px`,
        width: `35px`,
        [theme.breakpoints.down('sm')]: {
            height: `30px`,
            width: `30px`,
        },
    },
}));