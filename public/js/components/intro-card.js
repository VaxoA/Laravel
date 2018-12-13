import React from "react";
import Badge from "./badge";
import Icon from "./icon";

class IntroCard extends React.Component {
    constructor(props) {
        super(props);
    }

    componentWillMount() {
        this.setState({ word: this.props.baseWord });
        this.timeout = null;
    }

    onMouseOver(iconName) {
        clearTimeout(this.timeout);
        this.timeout = setTimeout(
            function() {
                this.setState({ word: iconName });
            }.bind(this),
            100
        );
    }

    onMouseOut() {
        // Don't leave, if they enter a different active state quickly.
        this.timeout = setTimeout(
            function() {
                this.setState({ word: this.props.baseWord });
            }.bind(this),
            200
        );
    }

    render() {
        return (
            <div className="card">
            <Badge word={this.state.word} />
        <h1>I'm Jen Luker</h1>
        <p>Developer and knitter.<br />
        Find me on:</p>
        <div className="iconBlock">
            <Icon
        name="talks"
        to="/talks"
        onMouseOverEvent={this.onMouseOver.bind(this)}
        onMouseOutEvent={this.onMouseOut.bind(this)}
        />
        <Icon
        name="twitter"
        href="https://twitter.com/knitcodemonkey"
        onMouseOverEvent={this.onMouseOver.bind(this)}
        onMouseOutEvent={this.onMouseOut.bind(this)}
        />
        <Icon
        name="github"
        href="https://github.com/knitcodemonkey"
        onMouseOverEvent={this.onMouseOver.bind(this)}
        onMouseOutEvent={this.onMouseOut.bind(this)}
        />
        <Icon
        name="linkedin"
        href="https://www.linkedin.com/in/knitcodemonkey/"
        onMouseOverEvent={this.onMouseOver.bind(this)}
        onMouseOutEvent={this.onMouseOut.bind(this)}
        />
        <Icon
        name="codePen"
        href="https://codepen.io/knitcodemonkey"
        onMouseOverEvent={this.onMouseOver.bind(this)}
        onMouseOutEvent={this.onMouseOut.bind(this)}
        />

        <Icon
        name="knitting"
        href="http://strongishfiber.com"
        onMouseOverEvent={this.onMouseOver.bind(this)}
        onMouseOutEvent={this.onMouseOut.bind(this)}
        />
        </div>
        </div>
    );
    }
}

IntroCard.defaultProps = { baseWord: "Welcome" };

export default IntroCard;
