import { makeStyles} from "@material-ui/core";
import { globalBorderRadius } from "../../Themes";

export const useStyles = makeStyles((theme) => ({
    event: {
        paddingLeft: `15%`,
    },
    eventDecal: {
        minHeight: `1px`,
        borderRadius: `${globalBorderRadius}px`,
        margin: `15px`,
        marginLeft: `15%`,
        marginRight: `15%`,
        borderLeft: `2px solid ${theme.categories.blue.main}`,
    },
    text: {
        margin: `5px`,
    }
}));