import React from "react";

const Save = ({ attributes }) => {
	const { title, content } = attributes;

	return (
		<div>
			<h2>{title}</h2>
			<p>{content}</p>
		</div>
	);
};

export default Save;
