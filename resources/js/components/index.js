import React from 'react';
import ReactDOM from 'react-dom';

function Test() {
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">Example wesh</div>

                        <div className="card-body">I'm an example component!</div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Test;

if (document.getElementById('root')) {
    ReactDOM.render(<Test />, document.getElementById('root'));
}
