
import { makeStyles} from "@material-ui/core";
import { white } from "../../Themes";

export const useStyles = makeStyles((theme) => ({
    
    item: {
        minWidth: `50px`,
        marginRight: `15%`,
    },
    title: {
        color: white,
        '&:hover': {
            color: theme.categories.blue.light,
         },
    },
    neDecor: {
        textDecoration: `none`,
        '&:hover': {
            textDecoration: `unset`,
            color: theme.categories.blue.light,
         },
         '&:active': {
            textDecoration: `unset`,
            color: theme.categories.blue.main,
         },
    }
}));