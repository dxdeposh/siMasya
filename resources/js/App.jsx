import { useState } from "react";
import NavBar from "./components/NavBar.jsx";
import Home from "./components/Home.jsx";
import Projects from "./components/Projects.jsx";
import Skills from "./components/Skills.jsx";
import Contacts from "./components/Contacts.jsx";
import "./App.css";

function App() {
    return (
        <main>
            <NavBar />
            <Home />
            <Projects />
            <Skills />
            <Contacts />
        </main>
    );
}

export default App;
