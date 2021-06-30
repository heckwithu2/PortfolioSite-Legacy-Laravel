
import { makeStyles} from "@material-ui/core";

export const useStyles = makeStyles((theme) => ({
    inputField: {
        border: `1px solid ${theme.button.add.blue} `,
        backgroundColor: theme.secondary.background.default,
        color: theme.secondary.textColor.default,
    },
    inputFieldFilled: {
        border: `1px solid ${theme.palette.textColor.default} `,
        backgroundColor: theme.secondary.background.default,
        color: theme.secondary.textColor.default,
    }
}));