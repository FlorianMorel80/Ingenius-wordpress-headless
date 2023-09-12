import React from "react";
import {
	RichText,
	AlignmentToolbar,
	BlockControls,
} from "@wordpress/block-editor";

export default function Edit({ attributes, setAttributes }) {
	const { title, content, alignment } = attributes;

	const onChangeTitle = (newTitle) => {
		setAttributes({ title: newTitle });
	};

	const onChangeContent = (newContent) => {
		setAttributes({ content: newContent });
	};

	const onChangeAlignment = (newAlignment) => {
		setAttributes({ alignment: newAlignment });
	};

	return (
		<div>
			<BlockControls>
				<AlignmentToolbar value={alignment} onChange={onChangeAlignment} />
			</BlockControls>
			<RichText
				tagName="h2"
				placeholder="Ajouter chiffre KPI"
				value={title}
				onChange={onChangeTitle}
			/>
			<RichText
				tagName="p"
				placeholder="Ajouter la description"
				value={content}
				onChange={onChangeContent}
			/>
		</div>
	);
}
