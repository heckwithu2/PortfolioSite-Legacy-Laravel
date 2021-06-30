import React from "react";
import {Grid} from "@material-ui/core";
import { useStyles } from "./styles";

const Icon = (props) => {
    const { children } = props;
    const classes = useStyles();

    return ( 
        <Grid justifyContent="center" alignItems="center" className={classes.icon}>
            {children}
        </Grid>
    )
}

export default Icon;