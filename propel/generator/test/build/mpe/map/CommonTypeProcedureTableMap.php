<?php



/**
 * This class defines the structure of the 'TypeProcedure' table.
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
class CommonTypeProcedureTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonTypeProcedureTableMap';

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
        $this->setName('TypeProcedure');
        $this->setPhpName('CommonTypeProcedure');
        $this->setClassname('CommonTypeProcedure');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_type_procedure', 'IdTypeProcedure', 'INTEGER', true, null, null);
        $this->addColumn('libelle_type_procedure', 'LibelleTypeProcedure', 'VARCHAR', true, 100, '');
        $this->addColumn('libelle_type_procedure_fr', 'LibelleTypeProcedureFr', 'VARCHAR', false, 100, null);
        $this->addColumn('libelle_type_procedure_en', 'LibelleTypeProcedureEn', 'VARCHAR', false, 100, null);
        $this->addColumn('libelle_type_procedure_es', 'LibelleTypeProcedureEs', 'VARCHAR', false, 100, null);
        $this->addColumn('libelle_type_procedure_su', 'LibelleTypeProcedureSu', 'VARCHAR', false, 100, null);
        $this->addColumn('libelle_type_procedure_du', 'LibelleTypeProcedureDu', 'VARCHAR', false, 100, null);
        $this->addColumn('libelle_type_procedure_cz', 'LibelleTypeProcedureCz', 'VARCHAR', false, 100, null);
        $this->addColumn('libelle_type_procedure_ar', 'LibelleTypeProcedureAr', 'VARCHAR', false, 100, null);
        $this->addColumn('abbreviation', 'Abbreviation', 'VARCHAR', true, 50, '');
        $this->addColumn('type_boamp', 'TypeBoamp', 'INTEGER', true, null, 0);
        $this->addColumn('categorie_procedure', 'CategorieProcedure', 'INTEGER', true, null, 0);
        $this->addColumn('id_type_procedure_ANM', 'IdTypeProcedureAnm', 'INTEGER', true, null, 0);
        $this->addColumn('delai_alerte', 'DelaiAlerte', 'INTEGER', true, null, 0);
        $this->addColumn('mapa', 'Mapa', 'CHAR', true, null, '0');
        $this->getColumn('mapa', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('consultation_transverse', 'ConsultationTransverse', 'CHAR', true, null, '0');
        $this->getColumn('consultation_transverse', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('code_recensement', 'CodeRecensement', 'CHAR', false, 3, null);
        $this->addColumn('abbreviation_portail_ANM', 'AbbreviationPortailAnm', 'VARCHAR', true, 50, null);
        $this->addColumn('id_modele', 'IdModele', 'INTEGER', true, 1, null);
        $this->addColumn('libelle_type_procedure_it', 'LibelleTypeProcedureIt', 'VARCHAR', false, 100, '');
        $this->addColumn('affichage_caution', 'AffichageCaution', 'INTEGER', false, 2, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonTypeProcedureTableMap
