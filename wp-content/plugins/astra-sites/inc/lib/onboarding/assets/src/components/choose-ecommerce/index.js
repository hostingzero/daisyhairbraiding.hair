import React, { useEffect, useState } from 'react';
import Tooltip from '../tooltip';
import { __ } from '@wordpress/i18n';
import { useStateValue } from '../../store/store';
import ICONS from '../../../icons';
import './style.scss';
import {
	getDemo,
	checkRequiredPlugins,
	checkFileSystemPermissions,
} from '../../steps/import-site/import-utils';
const { imageDir } = starterTemplates;

const ChooseEcommerce = () => {
	const storedState = useStateValue();
	const [
		{ selectedTemplateID, allSitesData, currentCustomizeIndex },
		dispatch,
	] = useStateValue();
	const [ checkedTemplateID, setCheckedTemplateID ] =
		useState( selectedTemplateID );

	const selectedTemplate = allSitesData[ `id-${ selectedTemplateID }` ];
	const relatedTemplateID =
		selectedTemplate?.related_ecommerce_template || '';

	const changeEcommerceTemplate = async ( event ) => {
		const newTemplateId = parseInt( event.target.value );
		const id = event.target.id;

		// Update selected template ID in the state and UI
		dispatch( {
			type: 'set',
			templateId: newTemplateId,
		} );
		setCheckedTemplateID( newTemplateId );
		// Update stored state for selected plugin and trigger further checks
		storedState[ 0 ].selectedEcommercePlugin = id;
		await getDemo( newTemplateId, storedState );
		await checkRequiredPlugins( storedState );
		checkFileSystemPermissions( storedState );
	};

	useEffect( () => {
		setCheckedTemplateID( selectedTemplateID );
	}, [ selectedTemplateID, relatedTemplateID ] );

	useEffect( () => {
		if ( ! relatedTemplateID ) {
			dispatch( {
				type: 'set',
				currentCustomizeIndex: currentCustomizeIndex + 1, // Skip 1 step.
			} );
		}
	}, [ relatedTemplateID, currentCustomizeIndex, dispatch ] );

	return (
		<div className="customizer-ecommerce-selection mb-5 w-full">
			<label className="ist-customizer-heading w-full" htmlFor="surecart">
				<div className="ist-image-section">
					<img
						className="ist-surecart-icon"
						alt="SureCart"
						src={ `${ imageDir }surecart-icon.svg` }
					/>
					<span> { __( 'SureCart', 'astra-sites' ) }</span>
					<Tooltip
						placement="top"
						className="custom-tooltip"
						content={
							<span>
								{ __(
									'A simple yet powerful e-commerce platform designed to grow your business with effortlessly selling online.',
									'astra-sites'
								) }
							</span>
						}
					>
						{ ICONS.questionMark }
					</Tooltip>
				</div>
				<input
					id="surecart"
					type="radio"
					name="ecommerce"
					value={ relatedTemplateID }
					checked={ checkedTemplateID === relatedTemplateID }
					onChange={ changeEcommerceTemplate }
				/>
			</label>
			<label className="ist-customizer-heading" htmlFor="woocommerce">
				<div className="ist-image-section">
					<img
						className="ist-woocommerce-icon"
						alt="WooCommerce"
						src={ `${ imageDir }woocommerce-icon.svg` }
					/>
					<span>{ __( 'WooCommerce', 'astra-sites' ) }</span>
					<Tooltip
						placement="bottom"
						className="custom-tooltip"
						content={
							<span>
								{ __(
									'WooCommerce is an open-source e-commerce plugin for WordPress. It is designed for small to large-sized online merchants using WordPress.',
									'astra-sites'
								) }
							</span>
						}
					>
						{ ICONS.questionMark }
					</Tooltip>
				</div>
				<input
					id="woocommerce"
					type="radio"
					name="ecommerce"
					value={ selectedTemplateID }
					checked={ checkedTemplateID === selectedTemplateID }
					onChange={ changeEcommerceTemplate }
				/>
			</label>
		</div>
	);
};

export default ChooseEcommerce;
