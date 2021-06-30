import React from "react";
import {Grid} from "@material-ui/core";
import PropTypes from 'prop-types';
import Message from "../message";
import Skill from "../skill";
import { 
    SiReact as ReactIcon,
    SiRedux as ReduxIcon,
    SiLaravel as LaravelIcon,
    SiSpring as SpringIcon,
    SiHtml5 as HtmlIcon,
    SiCss3 as CssIcon,
    SiSass as SassIcon,
    BsFillExclamationOctagonFill as EmptyIcon,
 } from 'react-icons/si';
import Icon from "../icon";
import Typography from '@material-ui/core/typography';
import { makeStyles} from "@material-ui/core";
import { globalSpacing, globalBorderRadius  } from "../../Themes";

const useStyles = makeStyles((theme) => ({
    header: {
        marginLeft: `${globalSpacing/2}px`,
        marginRight: `${globalSpacing/2}px`,
        marginTop: `${globalSpacing/2}px`,
        marginBottom: `${globalSpacing/2}px`,
        padding: `0px`,
        background: `linear-gradient(217deg, ${theme.palette.background.gradientBlue}, ${theme.palette.background.gradientRed} 70.71%),
        linear-gradient(127deg, ${theme.palette.background.gradientBlue}, ${theme.palette.background.gradientRed} 70.71%),
        linear-gradient(336deg, ${theme.palette.background.gradientBlue}, ${theme.palette.background.gradientRed} 70.71%)`,        //backgroundColor: theme.palette.background.gradientPurple,
        
        height: `auto`,
        minHeight: `15vh`,
        borderRadius: `${globalBorderRadius}px`,
        border: `3px solid ${theme.palette.primary.main}`,
    },
    icon: {
        height: `35px`,
        width: `35px`,
        [theme.breakpoints.down('sm')]: {
            height: `15px`,
            width: `15px`,
        },
    },
}));
const Header = (props) => {
    const { skills } = props;
    const classes = useStyles();
    const components = skills;

    const renderSkills = (skills) => {
        return (
            <Grid item xs={12} container justifyContent="center" alignItems="center">
                {skills.map((skill) => 
                    <Grid item xs={3} sm key={skill.id} justifyContent="center" alignItems="center">
                        <Typography align={"center"}>
                            <Grid container >
                                <a 
                                    style={{color: `#ffffff`, position: `relative`, left: `calc(50% - 17.5px)`}}
                                    target={`blank`}
                                    href={`${skill.link}`}>
                                        <Grid item xs={6} justifyContent="center" alignItems="center">{skill.title}</Grid>
                                        {skill.title  === `Laravel` && <Icon><LaravelIcon className={classes.icon}/></Icon>}
                                        {skill.title  === `React` && <Icon><ReactIcon className={classes.icon}/></Icon>}
                                        {skill.title  === `Redux` && <Icon><ReduxIcon className={classes.icon}/></Icon>}
                                        {skill.title  === `Spring` && <Icon><SpringIcon className={classes.icon}/></Icon>}
                                        {skill.title  === `HTML5` && <Icon><HtmlIcon className={classes.icon}/></Icon>}
                                        {skill.title  === `CSS3` && <Icon><CssIcon className={classes.icon}/></Icon>}
                                        {skill.title  === `SASS` && <Icon><SassIcon className={classes.icon}/></Icon>}
                                </a>
                            </Grid>
                        </Typography>
                    </Grid>
                )}
            </Grid>
        );
    }

    return (
        <Grid container className={classes.header}>
            <Grid item xs={12}>
                <Message/>
            </Grid>
            {renderSkills(components)}
        </Grid>
    )
}

Header.propTypes = {
    skills: PropTypes.arrayOf(PropTypes.string).isRequired,
}

Header.defaultProps = {
    skills: [
        {
            //comp: <ReactIcon className={classes.icon}/>,
            title: `React`,
            link: `https://reactjs.org/`,
        },
        {
            //comp: <ReduxIcon className={classes.icon}/>,
            title: `Redux`,
            link: `https://redux.js.org/`,
        },
        {
            //comp:<LaravelIcon className={classes.icon}/> ,
            title: `Laravel`,
            link: `https://laravel.com/`,
        },
        {
            //comp:<SpringIcon className={classes.icon}/> ,
            title: `Spring`,
            link: `https://spring.io/`,
        },
        {
            //comp: <HtmlIcon className={classes.icon}/>,
            title: `HTML5`,
            link: `https://developer.mozilla.org/en-US/docs/Glossary/HTML5`,
        },
        {
            //comp: <CssIcon className={classes.icon}/>,
            title: `CSS3`,
            link: `https://developer.mozilla.org/en-US/docs/Web/CSS`,
        },
        {
            //comp: <SassIcon className={classes.icon}/>,
            title: `SASS`,
            link: `https://sass-lang.com/`,
        },        
    ]
}

export default Header;