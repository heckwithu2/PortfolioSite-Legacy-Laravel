import React from "react";
import Typography from '@material-ui/core/Typography';
import PropTypes from 'prop-types';
import { useStyles } from "./styles";
import LinkedInIcon from '@material-ui/icons/LinkedIn';
import GitHubIcon from '@material-ui/icons/GitHub';

const Link = (props) => {
    const {name, destination, target, decoration, icon, image, variant} = props;
    const classes = useStyles();

    return (
        <a
            href={destination}
            target={target && `blank`}
            className={decoration ? classes.link : classes.linkNoDec}
        >
            {!icon && <Typography >{name}</Typography>}
            { image === "GitHub" 
            && <GitHubIcon/>} 
            { image === "LinkedIn" 
            && <LinkedInIcon/>} 
        </a>
    )
}

Link.propTypes = {
    name: PropTypes.string,
    destination: PropTypes.string.isRequired,
    target: PropTypes.bool,
    decoration: PropTypes.bool,
    icon: PropTypes.bool,
    image: PropTypes.string,
    variant: PropTypes.string,
}

Link.defaultProps = {
    name: null,
    destination: null,
    target: true,
    decoration: false,
    icon: false,
    image: null,
    variant: null,
}

export default Link;