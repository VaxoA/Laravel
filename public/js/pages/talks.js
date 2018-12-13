import React from 'react';
import showdown from "showdown";
import axios from "axios";
import IconBlock from '../components/icon-block';
import About from '../components/about';
import FindMe from '../components/find-me';

export default class Talks extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            talks: []
        };
    }

    componentWillMount() {
        let that = this;
        axios
            .get(
                "https://raw.githubusercontent.com/knitcodemonkey/presentation-proposals/master/README.md"
            )
            .then(function(response) {
                const talks = that.state.talks;
                talks.push(response.data);
                that.setState({ talks });
            })
            .catch(function(error) {
                console.log(error);
            });
    }

    render() {
        const converter = new showdown.Converter();
        converter.setFlavor("github");
        return (
            <div className="beautiful">
            <div className="contentBlock">
            <IconBlock />
            <div className="content talks">
            <About />
            <FindMe />

            {this.state.talks.map((talk, idx) => {
                return (
                    <div
                key={"talk" + idx}
                className="talk"
                dangerouslySetInnerHTML={{ __html: converter.makeHtml(talk) }}
                />
            );
            })}
    </div>
        </div>
        </div>
    );
    }
};