import React from "react";
import Icon from "./icon";

export default class IconBlock extends React.Component {
    constructor(props) {
        super(props);
    }

    render() {
        const that = this;
        return (
            <div className="iconBlock">
            <Icon
        name="home"
        to="/"
        onMouseOverEvent={() => {return;}}
        onMouseOutEvent={() => {return;}}
        />
        <Icon
        name="talks"
        to="/talks"
        onMouseOverEvent={() => {return;}}
        onMouseOutEvent={() => {return;}}
        />
        <Icon
        name="twitter"
        href="https://twitter.com/knitcodemonkey"
        onMouseOverEvent={() => {return;}}
        onMouseOutEvent={() => {return;}}
        />
        <Icon
        name="github"
        href="https://github.com/knitcodemonkey"
        onMouseOverEvent={() => {return;}}
        onMouseOutEvent={() => {return;}}
        />
        <Icon
        name="linkedin"
        href="https://www.linkedin.com/in/knitcodemonkey/"
        onMouseOverEvent={() => {return;}}
        onMouseOutEvent={() => {return;}}
        />

        <Icon
        name="codePen"
        href="https://codepen.io/knitcodemonkey"
        onMouseOverEvent={() => {return;}}
        onMouseOutEvent={() => {return;}}
        />
        <Icon
        name="knitting"
        href="http://strongishfiber.com"
        onMouseOverEvent={() => {return;}}
        onMouseOutEvent={() => {return;}}
        />
        </div>
    );
    }
}
