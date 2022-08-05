<?php



/**
 * This class defines the structure of the 'Type_Procedure_Organisme' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.mpe.map
 */
class CommonTypeProcedureOrganismeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonTypeProcedureOrganismeTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('Type_Procedure_Organisme');
        $this->setPhpName('CommonTypeProcedureOrganisme');
        $this->setClassname('CommonTypeProcedureOrganisme');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_type_procedure', 'IdTypeProcedure', 'INTEGER', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, '');
        $this->addColumn('libelle_type_procedure', 'LibelleTypeProcedure', 'VARCHAR', true, 100, '');
        $this->addColumn('abbreviation', 'Abbreviation', 'VARCHAR', true, 50, '');
        $this->addColumn('type_boamp', 'TypeBoamp', 'INTEGER', true, null, 0);
        $this->addColumn('id_type_procedure_portail', 'IdTypeProcedurePortail', 'INTEGER', true, null, 0);
        $this->addColumn('categorie_procedure', 'CategorieProcedure', 'INTEGER', true, null, 0);
        $this->addColumn('delai_alerte', 'DelaiAlerte', 'INTEGER', true, null, 0);
        $this->addColumn('id_type_validation', 'IdTypeValidation', 'INTEGER', true, null, 2);
        $this->addColumn('service_validation', 'ServiceValidation', 'INTEGER', true, null, 0);
        $this->addColumn('mapa', 'Mapa', 'CHAR', true, null, '0');
        $this->getColumn('mapa', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('activer_mapa', 'ActiverMapa', 'CHAR', true, null, '1');
        $this->getColumn('activer_mapa', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('libelle_type_procedure_fr', 'LibelleTypeProcedureFr', 'VARCHAR', false, 100, '');
        $this->addColumn('libelle_type_procedure_en', 'LibelleTypeProcedureEn', 'VARCHAR', false, 100, '');
        $this->addColumn('libelle_type_procedure_es', 'LibelleTypeProcedureEs', 'VARCHAR', false, 100, '');
        $this->addColumn('libelle_type_procedure_su', 'LibelleTypeProcedureSu', 'VARCHAR', false, 100, '');
        $this->addColumn('libelle_type_procedure_du', 'LibelleTypeProcedureDu', 'VARCHAR', false, 100, '');
        $this->addColumn('libelle_type_procedure_cz', 'LibelleTypeProcedureCz', 'VARCHAR', false, 100, '');
        $this->addColumn('libelle_type_procedure_ar', 'LibelleTypeProcedureAr', 'VARCHAR', false, 100, null);
        $this->addColumn('id_montant_mapa', 'IdMontantMapa', 'INTEGER', true, 2, 0);
        $this->addColumn('code_recensement', 'CodeRecensement', 'CHAR', false, 3, null);
        $this->addColumn('depouillable_phase_consultation', 'DepouillablePhaseConsultation', 'CHAR', true, null, '0');
        $this->getColumn('depouillable_phase_consultation', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('consultation_transverse', 'ConsultationTransverse', 'CHAR', true, null, '0');
        $this->getColumn('consultation_transverse', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('tag_Boamp', 'TagBoamp', 'VARCHAR', true, 50, '');
        $this->addColumn('ao', 'Ao', 'CHAR', true, null, '0');
        $this->getColumn('ao', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('mn', 'Mn', 'CHAR', true, null, '0');
        $this->getColumn('mn', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('dc', 'Dc', 'CHAR', true, null, '0');
        $this->getColumn('dc', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('autre', 'Autre', 'CHAR', true, null, '0');
        $this->getColumn('autre', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('sad', 'Sad', 'CHAR', true, null, '0');
        $this->getColumn('sad', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('accord_cadre', 'AccordCadre', 'CHAR', true, null, '0');
        $this->getColumn('accord_cadre', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('tag_name_mesure_avancement', 'TagNameMesureAvancement', 'VARCHAR', true, 100, null);
        $this->addColumn('abreviation_interface', 'AbreviationInterface', 'VARCHAR', false, 50, null);
        $this->addColumn('libelle_type_procedure_it', 'LibelleTypeProcedureIt', 'VARCHAR', false, 100, null);
        $this->addColumn('publicite_types_form_xml', 'PubliciteTypesFormXml', 'LONGVARCHAR', true, null, null);
        $this->addColumn('tag_name_chorus', 'TagNameChorus', 'VARCHAR', true, 100, null);
        $this->addColumn('equivalent_opoce', 'EquivalentOpoce', 'VARCHAR', true, 100, null);
        $this->addColumn('equivalent_boamp', 'EquivalentBoamp', 'VARCHAR', true, 100, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonTypeProcedureOrganismeTableMap
