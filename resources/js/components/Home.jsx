import React, { useRef } from "react";
import CustomHook from "./CustomHook.jsx";
function Home() {
    const scrollTab = useRef();
    CustomHook(scrollTab);

    return (
        <section ref={scrollTab} className="home">
            <div className="content">
                <div className="name">
                    MY NAME IS <span>DEPO</span>
                </div>
                <div className="des">
                    {/* 30 */}A third-semester Informatics Engineering student
                    with a strong focus on Fullstack Web Development. Highly
                    motivated to learn and committed to continuously improving
                    technical skills, both in front-end and backend development.
                </div>

                <a
                    href="/port/cv.pdf"
                    target="_blank"
                    rel="noopener noreferrer"
                    className="animation active "
                >
                    Download My CV
                </a>
            </div>
            <div className="avatar">
                <div className="card">
                    <img src="/port/avatar.png" alt="" />
                    <div className="info">
                        <div>Fullstack Web Developer</div>
                        <div>Indonesia</div>
                        <div>06/11</div>
                        <div>Male</div>
                    </div>
                </div>
            </div>
        </section>
    );
}

export default Home;
