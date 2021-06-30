
import { fade, makeStyles} from "@material-ui/core";
import { black, globalBorderRadius } from "../../Themes";

export const useStyles = makeStyles((theme) => ({
    root: {
        flexGrow: 1,
      },
      menuButton: {
        marginRight: theme.spacing(2),
      },
      title: {
        flexGrow: 1,
        display: 'none',
        [theme.breakpoints.up('sm')]: {
          display: 'block',
        },
        color: theme.text.primary,
      },
      search: {
        position: 'relative',
        borderRadius: `${globalBorderRadius}px`,
        border: `3px solid ${theme.categories.blue.main}`,
        backgroundColor: fade(theme.palette.secondary.light, 0.15),
        '&:hover': {
          backgroundColor: fade(theme.palette.secondary.light, 0.25),
        },
        marginLeft: 0,
        width: '100%',
        [theme.breakpoints.up('xs')]: {
          marginLeft: theme.spacing(1),
          width: 'auto',
        },
        color: theme.text.primary,
      },
      searchIcon: {
        padding: theme.spacing(0, 2),
        height: '100%',
        position: 'absolute',
        pointerEvents: 'none',
        display: 'flex',
        alignItems: 'center',
        justifyContent: 'center',
      },
      inputRoot: {
        color: 'inherit',
      },
      inputInput: {
        padding: theme.spacing(1, 1, 1, 0),
        // vertical padding + font size from searchIcon
        paddingLeft: `calc(1em + ${theme.spacing(4)}px)`,
        transition: theme.transitions.create('width'),
        width: '100%',
        [theme.breakpoints.up('sm')]: {
          width: '12ch',
          '&:focus': {
            width: '20ch',
          },
        },
      },
      toolbar: {
        background: `linear-gradient(45deg, #101010, #171717)`,
      }
}));