import { makeStyles} from "@material-ui/core";

export const useStyles = makeStyles((theme) => ({
    deleteButton : {
        width: `75px`,
        height: `56px`,
        backgroundColor: theme.button.delete,
    },
    editButton : {
        width: `75px`,
        height: `56px`,
        backgroundColor: theme.button.edit,
    },
    addButton : {
        width: `75px`,
        height: `56px`,
        backgroundColor: theme.button.add,
    },
    addButtonError : {
        width: `75px`,
        height: `56px`,
        border: `3px solid ${theme.button.delete}`,
        backgroundColor: theme.button.add,
    }
}));