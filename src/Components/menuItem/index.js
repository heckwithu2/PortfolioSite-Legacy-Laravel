import React from "react";
import {useStyles} from "./styles";
import Link from "../link";
import PropTypes from 'prop-types';
import Typography from '@material-ui/core/Typography';

const MenuItem = (props) => {
    const { image, link, children } = props;
    const classes = useStyles();


    return (
        <div className={classes.item}>
            {image 
            ? <Link icon={true} decoration={false} destination={link} image={image}/>
            : <a  href={link} className={classes.neDecor}>
                <Typography className={classes.title} variant="h6" noWrap>{children}</Typography>
                </a>}            
        </div>
    )
}

MenuItem.propTypes = {
    image: PropTypes.string,
    link: PropTypes.string.isRequired,
}

MenuItem.defaultProps = {
    image: null,
    link: null,
}

export default MenuItem;