import React from "react";
import AppBar from '@material-ui/core/AppBar';
import Toolbar from '@material-ui/core/Toolbar';
import Typography from '@material-ui/core/Typography';
import InputBase from '@material-ui/core/InputBase';
import SearchIcon from '@material-ui/icons/Search';
import { useStyles } from "./styles";
import LinearBarProgress from "../../Components/LinearBarProgress";
import PropTypes from 'prop-types';
import MenuItem from "../menuItem";
import {HOME,CV, PROJECTS} from '../../routes';
import {Grid} from "@material-ui/core";

const Menu = (props) => {
  const { menuTitle } = props;
    const classes = useStyles();

    return (
        <AppBar position="sticky">
          <LinearBarProgress/>
        <Toolbar className={classes.toolbar}>
          <Grid container direction="row" justify="flex-start" alignItems="center">
            <Grid item xs={12} md={6}  container  >
              <Typography className={classes.title} variant="h6" noWrap>Website still in development! </Typography>
              {/* <Grid item xs={3} >
                <MenuItem link={`${HOME}#${CV}`}>{menuTitle[0]}
                </MenuItem>
              </Grid>
              <Grid item xs={3}>
                <MenuItem link={`${HOME}#${PROJECTS}`}>{menuTitle[1]}
                </MenuItem>
              </Grid>
              <Grid item xs={3} >
                <MenuItem link={`https://www.linkedin.com/in/jeremiah-heck-498b1a184/`} image={`LinkedIn`}/>
              </Grid>
              <Grid item xs={3} >
                <MenuItem link={`https://github.com/heckwithu2`} image={`GitHub`}/>
              </Grid> */}
            </Grid>
          </Grid>

          {/* <div className={classes.search}>
            <div className={classes.searchIcon}>
              <SearchIcon />
            </div>
            <InputBase
              placeholder="Search..."
              classes={{
                root: classes.inputRoot,
                input: classes.inputInput,
              }}
            />
          </div> */}
          
        </Toolbar>
      </AppBar>
    )
}

Menu.propTypes = {
  menuTitle: PropTypes.string.isRequired,
}

Menu.defaultProps = {
  menuTitle: [ 
    "Curriculum Vitae",
    "Projects"  
  ],
}

export default Menu;