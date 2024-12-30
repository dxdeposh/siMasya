import React, { useRef, useState } from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import {
    faReact,
    faHtml5,
    faCss3,
    faJs,
    faVuejs,
    faLaravel,
    faCss3Alt,
} from "@fortawesome/free-brands-svg-icons";
import CustomHook from "./CustomHook";
import { faAnchor, faDatabase } from "@fortawesome/free-solid-svg-icons";

function Skills() {
    const divs = useRef([]);
    const scrollTab = useRef();
    CustomHook(scrollTab, divs);
    const [listSkills] = useState([
        {
            name: "HTML",
            des: "Terampil dalam menyusun konten web yang responsif dan optimal, memastikan pengalaman pengguna yang konsisten di berbagai browser.",
            icon: faHtml5,
        },
        {
            name: "CSS",
            des: "Terampil dalam mengatur layout, warna, dan animasi, memastikan tampilan web yang menarik dan konsisten di berbagai perangkat.",
            icon: faCss3,
        },
        {
            name: "Javascript",
            des: "Terampil dalam mengembangkan fitur interaktif dan dinamis, memastikan fungsionalitas web yang responsif dan optimal.",
            icon: faJs,
        },
        {
            name: "ReactJs",
            des: "Terampil dalam mengembangkan aplikasi web modern dengan ReactJs, memastikan performa dan keamanan yang optimal.",
            icon: faReact,
        },
        {
            name: "Laravel",
            des: "Terampil dalam mengembangkan aplikasi web dinamis dengan Laravel, memastikan keamanan dan kecepatan yang optimal.",
            icon: faLaravel,
        },
        {
            name: "MySQL",
            des: "Terampil dalam merancang dan mengelola database, memastikan data yang konsisten dan aman.",
            icon: faDatabase,
        },
    ]);
    return (
        <section className="skills" ref={scrollTab}>
            <div className="title" ref={(el) => el && divs.current.push(el)}>
                This is my Skills
            </div>
            <div className="des" ref={(el) => el && divs.current.push(el)}>
                {/* 20 */}
                Highlighting my proficiency in web development, project
                management, and creative problem-solving across various
                platforms.
            </div>
            <div className="list">
                {listSkills.map((value, key) => (
                    <div
                        className={"item "}
                        key={key}
                        ref={(el) => el && divs.current.push(el)}
                    >
                        <FontAwesomeIcon icon={value.icon} />
                        <h3>{value.name}</h3>
                        <div className="des">{value.des}</div>
                    </div>
                ))}
            </div>
        </section>
    );
}

export default Skills;
