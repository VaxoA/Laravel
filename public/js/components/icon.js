import React, { Component } from 'react';
import { Link } from "react-router-dom";

class Icon extends Component {
    constructor(props) {
        super(props);
    }

    onMouseOver(event) {
        this.props.onMouseOverEvent(this.props.name);
    }

    onMouseOut(event) {
        this.props.onMouseOutEvent(event);
    }

    render() {
        if (this.props.to) {
            return (
                <Link
            to={this.props.to}
            onMouseOver={this.onMouseOver.bind(this)}
            onFocus={this.onMouseOver.bind(this)}
            onMouseLeave={this.onMouseOut.bind(this)}
            onBlur={this.onMouseOut.bind(this)}
            title={this.props.name}
            rel="noopener"
                >

                <svg className={"icon icon-bubble icon-larger " + this.props.name} alt={ this.props.name }>
        <use xlinkHref={ '#' + this.props.name }></use>
                </svg>
                </Link>
        )
        } else {
            return (
                <a
            href={this.props.href}
            target="_blank"
            onMouseOver={this.onMouseOver.bind(this)}
            onFocus={this.onMouseOver.bind(this)}
            onMouseLeave={this.onMouseOut.bind(this)}
            onBlur={this.onMouseOut.bind(this)}
            title={this.props.name}>
        <svg className={"icon icon-bubble icon-larger " + this.props.name} alt={ this.props.name }>
        <use xlinkHref={ '#' + this.props.name }></use>
                </svg>
                </a>
        )
        }
    }

};

export default Icon;

