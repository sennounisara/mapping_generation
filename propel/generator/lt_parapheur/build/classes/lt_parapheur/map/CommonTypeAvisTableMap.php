<?php



/**
 * This class defines the structure of the 'TypeAvis' table.
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
class CommonTypeAvisTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonTypeAvisTableMap';

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
        $this->setName('TypeAvis');
        $this->setPhpName('CommonTypeAvis');
        $this->setClassname('CommonTypeAvis');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('intitule_avis', 'IntituleAvis', 'VARCHAR', true, 100, '');
        $this->addColumn('intitule_avis_fr', 'IntituleAvisFr', 'VARCHAR', false, 100, null);
        $this->addColumn('intitule_avis_en', 'IntituleAvisEn', 'VARCHAR', false, 100, null);
        $this->addColumn('intitule_avis_es', 'IntituleAvisEs', 'VARCHAR', false, 100, null);
        $this->addColumn('intitule_avis_su', 'IntituleAvisSu', 'VARCHAR', false, 100, null);
        $this->addColumn('intitule_avis_du', 'IntituleAvisDu', 'VARCHAR', false, 100, null);
        $this->addColumn('intitule_avis_cz', 'IntituleAvisCz', 'VARCHAR', false, 100, null);
        $this->addColumn('intitule_avis_ar', 'IntituleAvisAr', 'VARCHAR', false, 100, null);
        $this->addColumn('abbreviation', 'Abbreviation', 'VARCHAR', true, 50, '');
        $this->addColumn('id_type_avis_ANM', 'IdTypeAvisAnm', 'INTEGER', true, null, 0);
        $this->addColumn('intitule_avis_it', 'IntituleAvisIt', 'VARCHAR', false, 100, '');
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonTypeAvisTableMap
