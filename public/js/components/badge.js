import React, { Component } from "react";
import { Transition } from "react-transition-group";

class Badge extends Component {
    constructor(props) {
        super(props);
    }

    render() {
        return (
            <div className="badge">
            <Transition
        timeout={{
            enter: 200,
                exit: 10
        }}
    >
    <div className="fade gearText" key={this.props.word}>
        {this.props.word}
    </div>
        </Transition>
        <svg className="gear">
            <use xlinkHref="#home" />
            </svg>
            </div>
    );
    }
}

export default Badge;
