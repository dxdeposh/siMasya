import React, { useState, useRef } from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import {
    faPersonCircleQuestion,
    faEarthAmericas,
} from "@fortawesome/free-solid-svg-icons";
import CustomHook from "./CustomHook";

function Projects() {
    const [listProjects] = useState([
        {
            name: "Public Complaint System",
            des: "Public Complaint System is a web application that allows citizens to report various issues and grievances to local government authorities. Key features include complaint submission, status tracking, real-time notifications, and an analytical dashboard for relevant agencies.",
            mission: "Full-stack Developer",
            language: "Laravel, Tailwind CSS, JavaScript dan MySQL",
            images: "/port/project3.png",
        },
        {
            name: "Laravel 11 E-Wallet Application",
            des: "Laravel 11 E-Wallet Application is a web application that enables users to conduct financial transactions, transfer money, and pay bills. Key features include account creation, balance top-up, transaction history, and real-time notifications.",
            mission: "Full-stack Developer",
            language: "Laravel, Tailwind CSS, dan JavaScript",
            images: "/port/project4.png",
        },
        {
            name: "Website Animated Slicing",
            des: "Website Animated Slicing is an animated website slicing project that showcases creativity and design skills. Key features include interactive animations, seamless page navigation, and responsiveness across all devices.",
            mission: "Front-end Developer",
            language: "HTML, CSS, JavaScript",
            images: "/port/project5.png",
        },
    ]);
    const divs = useRef([]);
    const scrollTab = useRef();
    CustomHook(scrollTab, divs);
    return (
        <section className="projects" ref={scrollTab}>
            <div className="title" ref={(el) => el && divs.current.push(el)}>
                This is my Projects
            </div>
            <div className="des" ref={(el) => el && divs.current.push(el)}>
                {/* 20 */}
                Developing projects in public complaint systems, eWallet
                applications, and animation slicing, showcasing growing
                expertise and creative solutions.
            </div>
            <div className="list">
                {listProjects.map((value, key) => (
                    <div
                        className="item"
                        key={key}
                        ref={(el) => el && divs.current.push(el)}
                    >
                        <div className="images">
                            <img src={value.images} alt="" />
                        </div>
                        <div className="content">
                            <h3>{value.name}</h3>
                            <div className="des">{value.des}</div>
                            <div className="mission">
                                <div>
                                    <FontAwesomeIcon
                                        icon={faPersonCircleQuestion}
                                    />
                                </div>
                                <div>
                                    <h4>Mission</h4>
                                    <div className="des">{value.mission}</div>
                                </div>
                            </div>
                            <div className="mission">
                                <div>
                                    <FontAwesomeIcon icon={faEarthAmericas} />
                                </div>
                                <div>
                                    <h4>Languages</h4>
                                    <div className="des">{value.language}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                ))}
            </div>
        </section>
    );
}
export default Projects;
