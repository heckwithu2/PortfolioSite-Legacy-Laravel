import React from "react";
import {useStyles} from "./styles";
import {Grid, Container} from "@material-ui/core";
import PropTypes from 'prop-types';
import Menu from "../../Components/menu";

const BaseScreen = (props) => {
    const { screen } = props;
    const classes = useStyles();
    

    return (
        
        <Grid className={classes.main}>
            {/* Menu */}
            <Menu/>
            <Container className={classes.mainContainer}>
                {screen}
            </Container>
        </Grid>
    )
}


BaseScreen.propTypes = {
    screen: PropTypes.element.isRequired,    
}

BaseScreen.defaultProps = {
    screen: null,
}


export default BaseScreen;