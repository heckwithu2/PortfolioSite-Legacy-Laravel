
import { makeStyles} from "@material-ui/core";
import { globalSpacing  } from "../../Themes";

export const useStyles = makeStyles((theme) => ({
    root: {
        width: '100%',
      },
    main: {
        minHeight: `100vh`,
        width: '100vw',
        background: `linear-gradient(217deg, ${theme.palette.background.gradientBlue}, ${theme.palette.background.gradientRed} 70.71%),
        linear-gradient(127deg, ${theme.palette.background.gradientBlue}, ${theme.palette.background.gradientRed} 70.71%),
        linear-gradient(336deg, ${theme.palette.background.gradientBlue}, ${theme.palette.background.gradientRed} 70.71%)`,
        //backgroundColor: theme.palette.background.shadow,
        color: theme.text.primary,
    },
    mainContainer: {
        marginTop: `${globalSpacing/2}px`,
        backgroundColor: `inherit`,
        height: `auto`,
        width: '100vw',
    }
}));