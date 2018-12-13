import React from 'react';
import ReactDOM from 'react-dom';
import IntroCard from '../components/intro-card';
import Beautiful from '../components/beautiful';

export default class Homepage extends React.Component {
    constructor(props) {
        super(props);
    }

    render() {
        return (
            <div className="animatedBg">
            <div className="center">
            <IntroCard />
            <Beautiful />
            </div>
            </div>
    )
    }
};