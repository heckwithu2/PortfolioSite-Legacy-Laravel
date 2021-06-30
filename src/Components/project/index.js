import React from 'react';
import { useStyles } from './styles';
import { Grid } from '@material-ui/core';
import PropTypes from 'prop-types';
import Typography from '@material-ui/core/typography';
import Link from '../link';


const Project = (props) => {
    const {title} = props;
    const classes = useStyles();

    return (
        <Grid className={`${classes.category}`}>
            <Grid className={classes.categoryTitle} >
                <Typography>{title}</Typography>
            </Grid>
            <Typography className={{paddingTop: `15px`}}>Coming Soon... Check my github in the meantime!</Typography>
            <Link destination={`https://github.com/heckwithu2`} name={`Github account`}/>
        </Grid>
    )
}

Project.propTypes = {
    title: PropTypes.string.isRequired,
}

Project.defaultProps = {
    title: "Category Title",
}

export default Project;