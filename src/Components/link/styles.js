
import { makeStyles} from "@material-ui/core";

export const useStyles = makeStyles((theme) => ({
    link: {
        color: theme.categories.blue.main,
    },
    linkNoDec: {
        color: theme.categories.blue.main,
        textDecoration: `none`,
    }
}));