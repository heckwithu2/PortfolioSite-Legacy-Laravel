import React from "react";
import { useStyles } from "./styles";


const LinearBarProgress = () => {
    const classes = useStyles();
    

    return (
        <div className={classes.progressBar}>
            <div className={classes.blackProgressBar}/>
        </div>
    )
}

export default LinearBarProgress;