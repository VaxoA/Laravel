import React from 'react';
import PropTypes from 'prop-types';

export default class Beautiful extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            step: 0,
            expand: true
        };
    }

    beautify (e) {
        e.preventDefault();
        let animatedBg = document.getElementById('app');
        if (animatedBg.disabled === true) {
            return;
        }
        animatedBg.disabled = true;
        let currstep = this.state.step;
        let expand = this.state.expand;

        if (animatedBg.className == "colors" && this.state.step === 0) {
            this.setState({step: 100, expand: !this.state.expand});
            currstep = 100;
            expand = false;
        }

        if (currstep === 0 && expand === true) {
            animatedBg.className = "colors";
        }
        if (currstep === 100 && expand === false) {
            animatedBg.className = "nocolors";
        }

        let id = setInterval(() => {
            if ((currstep === 100 || currstep === 0) && this.state.step != currstep) {
                clearInterval(id);
                this.setState({step: currstep, expand: !expand});
                if (currstep === 0) {
                    animatedBg.className = "";
                }
                animatedBg.disabled = false;
            } else {
                updateGradient(expand, this.props.colors);
                if (expand) {
                    currstep++;
                } else {
                    currstep--;
                }
            }
        }, 10);
    }

    render() {
        return (
            <button
        aria-label="Triggers a background radial gradient for fun. There is no other purpose."
        className="button"
        onClick={ (event) => { this.beautify(event) }}>beauty is in the eye of the beholder</button>
    )
    }

};

Beautiful.propTypes = {
    colors: PropTypes.array
};
Beautiful.defaultProps = {
    colors: [
        {
            color: 'rgba(56,73,16, 0.9)',
            percent: 0
        },
        {
            color: 'rgba(9,34,86, 0.8)',
            percent: 0
        },
        {
            color: 'rgba(72,6,86, 0.7)',
            percent: 0
        },
        {
            color: 'rgba(177,0,0, 0.6)',
            percent: 0
        },
        {
            color: 'rgba(193,160,4, 0.5)',
            percent: 0
        },
        {
            color: 'rgba(255,255,255, 0)',
            percent: 0
        }
    ]
};

