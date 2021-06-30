import React from "react";
import {useStyles} from "./styles";
import {Grid} from "@material-ui/core";
import PropTypes from 'prop-types';
import { Typography } from "@material-ui/core";
import Link from '../link';

const Event = (props) => {
    const { title, body, company, date, image, otherLink, link } = props;
    const classes = useStyles();
    return (
        <Grid container className={classes.eventDecal} >
            <Grid item xs={12} className={classes.event}>
                <Typography variant={'h6'} className={classes.text}>{title}</Typography>
                <Typography className={classes.text}>{date}</Typography>
                <Typography className={classes.text}>{body}</Typography>
                <Typography>{image}</Typography>
                {link !== null && <Link destination={link} name={`${company}`} target={true}/>}
                {otherLink !== null && <Link destination={otherLink} name={`Other Links`} target={true}/>}
            </Grid>
        </Grid>
        
    )
}


Event.propTypes = {
    title: PropTypes.string.isRequired,
    body: PropTypes.string.isRequired,
    date: PropTypes.string.isRequired,
    image: PropTypes.string,
    otherLink: PropTypes.string,
    link: PropTypes.string,
    company: PropTypes.string.isRequired,
}

Event.defaultProps = {
    title: null,
    body: null,
    date: null,
    image: null,
    otherLink: null,
    link: null,
    company: null,
}

export default Event;