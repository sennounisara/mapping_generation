<?php



/**
 * This class defines the structure of the 'caution_referentiel' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lt_parapheur.map
 */
class CommonCautionReferentielTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonCautionReferentielTableMap';

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
        $this->setName('caution_referentiel');
        $this->setPhpName('CommonCautionReferentiel');
        $this->setClassname('CommonCautionReferentiel');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('referentiel', 'Referentiel', 'INTEGER', true, null, null);
        $this->addColumn('libelle_fr', 'LibelleFr', 'VARCHAR', false, 250, null);
        $this->addColumn('libelle_ar', 'LibelleAr', 'VARCHAR', false, 250, null);
        $this->addColumn('code', 'Code', 'VARCHAR', false, 250, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonCautionReferentielTableMap
