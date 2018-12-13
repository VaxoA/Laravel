import React from "react";

const About = () => {
    return (
        <div className="about">
        <div className="aboutme">
        <img
    className="selfie"
    src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/859573/JenLuker_Formidable.jpg"
        />
        <div className="job">
        <h2>Jen Luker</h2>
    <div>Lead Software Engineer</div>
    <div>Formidable</div>
    </div>
    </div>

    <p>
    Jen Luker is a Lead software engineer at <a href="https://formidable.com">Formidable</a>, a <a href="https://orbit.fm/bookbytes">BookBytes</a> " +
    "podcast co-host, and a member of the RxJS learning team. She has spent a majority of her decade-long career as a full-stack developer using PHP, " +
    "Javascript, and CSS, but has a particular fondness for front end technologies. Jen trains others in ReactJS and accessibility, loves optimizing webpack builds, " +
    "and codes apps in React Native. When she's not finding solutions, learning new technologies, or reading, her spare time is spent spinning yarn from raw wool and knitting;" +
    " she's even been known to 3D print her own tools for the job. Jen is also fascinated by all things space, enjoys vintage cars, and is always looking for good conversation.
    </p>
    </div>
);
}

export default About;
