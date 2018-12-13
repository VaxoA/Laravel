import React from "react";
import speakingEngagements from "./engagements";

const FindMe = () => (
    <div className="findme" style={{ margin: "40px auto", width: "80%" }}>
{speakingEngagements.map(talk => {
    return (
        <div className="talkGrid">
        <div>{talk.date}</div>
    <div>
    <a href={talk.confUrl}>{talk.confName}</a>
    </div>
    <div>{talk.talkName}</div>
    {talk.talkVideo ? (
        <div>
        <a href={talk.talkVideo}>Watch the video</a>
    </div>
    ) : (
        ""
    )}
</div>
);
})}
</div>
);

export default FindMe;
