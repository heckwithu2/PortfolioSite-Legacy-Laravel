import React from "react";
import {useStyles} from "./styles";
import {Grid} from "@material-ui/core";
import Project from "../../Components/project";
import PropTypes from 'prop-types';
import Header from "../../Components/header";
import Event from "../../Components/event";
import Typography from '@material-ui/core/Typography';
import { CV, HEADER, PROJECTS } from "../../routes";

const HomeScreen = (props) => {
    const { categories, cvEntries, headerSectionTitles } = props;
    const classes = useStyles();
    
    const renderCV = (cvEntries) => {
        return (
            <Grid  item xs={12} className={classes.cv} container>
                {cvEntries.map((entry) => 
                    <Grid item xs={12}
                        container
                        direction="row"
                        justify="center"
                        alignItems="center">
                        <Event 
                            key={entry.id} 
                            alignText={"center"}
                            title={entry.title}
                            body={entry.body}
                            date={entry.date}
                            company={entry.company}
                            image={entry.image}
                            link={entry.organizationLink}
                            otherLink={entry.otherLinks}
                        />
                        {entry.id !== cvEntries.length - 1 && <Event/>}
                    </Grid>
                )}
            </Grid>
        );
    }

    const renderCategories = (categories) => {
        return (
            <Grid item xs={12} container className={classes.categoriesSection}>
                {categories.map((category) => 
                    <Grid item xs={4}>
                        <Project 
                            alignText={"center"}
                            key={category.id} 
                            title={category}
                        />
                    </Grid>
                )}
            </Grid>
        );
    }

    return (
        <Grid justify="center" alignItems="center" container className={classes.home}>
             
            {/* header */}
            <Grid item xs={12} container>
                <Header/>
            </Grid>
            
            <a id={`${CV}`}>
                <Typography variant={`h6`} className={classes.sectionTitles}>
                    {headerSectionTitles[0]}
                </Typography>
            </a>
            {/* {CV} */}
            {renderCV(cvEntries)}
            
            <a id={`${PROJECTS}`}>
            <Typography variant={`h6`} className={classes.sectionTitles}>{headerSectionTitles[1]}</Typography>
            </a>
            {/* categories */}
            {renderCategories(categories)}
            
        </Grid>
    )
}


HomeScreen.propTypes = {
    categories: PropTypes.arrayOf(PropTypes.string),
    cvEntries: PropTypes.arrayOf(PropTypes.object),
    headerSectionTitles: PropTypes.arrayOf(PropTypes.string),
}

HomeScreen.defaultProps = {
    headerSectionTitles: [
        `Curriculum Vitae`,
        `Projects`,
    ],
    categories: [
        "Club website",
        "Ios To-Do App",
        "Legacy Portfolio",
        "Ios Triangle Game",
        "OpenGL Project",
        "Game Jam Game 2019",
        "Game Jam Game 2020",
        "Spring Crud App",
        "Tic Tac Toe with React"
    ],
    cvEntries : [
        {
            id: 0,
            title: "Software Engineer Intern",
            company: "Carimus",
            body: "In my final semester of Kent State, I took on an internship at Carimus, a software company that focuses on creating a brand, design and business plan for start up companies. Though located in downtown Raleigh, I worked remotely to fix bugs, and add translations to an app called Luma. The front-end was built in React, Redux and Saga among other libraries. An the back-end was in Spring.",
            date: "4-29-2021 - 6/28/2021",
            image: "",
            organizationLink: 'https://carimus.com/',
            otherLinks: `https://lumapr.com/?lang=en&__cf_chl_jschl_tk__=dd1db642001042a1e7454c2d5ed0e492ab6453ff-1625006440-0-AflBTGx39zBK5tmpUIBHWXAQqSa5WiteBaX0zZkycfXwSY_W8Nv_saMBY49GcxySkgpcY0n1z5g7oSF25mzEFkkdm8aXzzDL3AflgyttH3xfnIBDzMOfgYe_gpqG0QKWVZK1bDWmryC47vG9iyKkzsMYcsKNaf7TsK-Aa7vu9VQ12vTDniyelk5bSe7gHGTPEUodlo6fmTFNLV5IlVq6V8rgiPaAifSPiGwKqLSAOFloIUPr25EscjKiV_3LENBMyW-i-sasGJ1y4CC_puHZmrhwqY2qY-aeRn-7lWWBhm15L2ulaECwBBSqSw_CHikJ0HFmPKn7vD7IddjTmOApHbbZcpHnamdWs70UHSZQ9jI3Qm0ykjMmHMu8MBzEMxWuUgjAI2jfAGJA0ZzVSZ7BTFc`,
        },
        {
            id: 1,
            title: "Full Stack Developer Intern",
            company: "Kasper Holdings, Inc",
            body: "I was rehired by Kasper Holdings during my Junior year summer to contribute on the TradeFull platform. I continued to learn Laravel, and regularly use Microsoft SQL Server, Bootstrap and more to fix various bugs.",
            date: "5/15/2020 - 6/15/2020",
            image: "",
            organizationLink: `https://www.tradefull.com/`,
        },
        {
            id: 2,
            title: "Front End Developer Intern",
            company: "Kasper Holdings, Inc",
            body: "During my sophomore year I was hired to contribute to the front page of Kasper Holdings eCommerce platform AreaTrend. I worked with artists and marketing to implement mock-ups in Bootstrap, HTML, CSS and Laravel.",
            date: "5/15/2019 - 8/15/2019",
            image: "",
        },
        {
            id: 3,
            title: "President",
            company: "Animation and Game Design Club, Kent State University",
            body: "During my time at KSU, I pursued my interests in Video Games, and joined the Animation and Game Design Club. I initially volunteered to be the treasurer, and was eventually voted in as the President of the club. I organized many events with my fellow club members, including two Global Game Jams and trips to multiple game convention.",
            date: "8/20/2018 - 8/20/2020",
            organizationLink: `https://www.kent.edu/csi/animation-and-game-design-club`,
            otherLinks: 'https://globalgamejam.org/',
        },
        {
            id: 4,
            title: "University Student",
            company: "Kent State University",
            body: "Immediately after college I entered Kent State as a business student with two goals: learning to program at a high level, and business fundamentals. I achieved both with my degree in Computer Information Systems and Computer Science.",
            date: "8/20/2017 - 5/15/2021",
            organizationLink: `https://www.kent.edu/business/mis`,
        },
        {
            id: 5,
            title: "Corporal, Non Commissioned Officer",
            company: "United States Army",
            body: "After HighSchool I joined the Army on active duty as a Combat Medic Specialist. I learned so many things: leadership, communication, confidence, self-reliance and more. I worked my way into the communications job at the company level where I obtained a Secret Clearance, and was in charge of millions of dollars of equipment and its functionality.",
            date: "8/27/2013 - 8/28/2017",
            image: "",
            organizationLink: `https://www.goarmy.com/careers-and-jobs/career-match/science-medicine/intensive-care/68w-combat-medic-specialist.html`,
        },
    ],
}


export default HomeScreen;