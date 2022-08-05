<?php



/**
 * This class defines the structure of the 'visite_lieux' table.
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
class CommonVisiteLieuxTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonVisiteLieuxTableMap';

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
        $this->setName('visite_lieux');
        $this->setPhpName('CommonVisiteLieux');
        $this->setClassname('CommonVisiteLieux');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, 50, null);
        $this->addForeignPrimaryKey('organisme', 'Organisme', 'VARCHAR' , 'consultation', 'organisme', true, 30, '');
        $this->addForeignKey('reference', 'Reference', 'INTEGER', 'consultation', 'reference', true, 50, 0);
        $this->addColumn('adresse', 'Adresse', 'VARCHAR', true, 250, '');
        $this->addColumn('id_tr_adresse', 'IdTrAdresse', 'INTEGER', false, null, null);
        $this->addColumn('date', 'Date', 'VARCHAR', true, 50, '');
        $this->addColumn('lot', 'Lot', 'CHAR', true, null, '');
        $this->addColumn('adresse_fr', 'AdresseFr', 'VARCHAR', false, 255, null);
        $this->addColumn('adresse_en', 'AdresseEn', 'VARCHAR', false, 255, null);
        $this->addColumn('adresse_es', 'AdresseEs', 'VARCHAR', false, 255, null);
        $this->addColumn('adresse_su', 'AdresseSu', 'VARCHAR', false, 255, null);
        $this->addColumn('adresse_du', 'AdresseDu', 'VARCHAR', false, 255, null);
        $this->addColumn('adresse_cz', 'AdresseCz', 'VARCHAR', false, 255, null);
        $this->addColumn('adresse_ar', 'AdresseAr', 'VARCHAR', false, 255, null);
        $this->addColumn('adresse_it', 'AdresseIt', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonConsultation', 'CommonConsultation', RelationMap::MANY_TO_ONE, array('organisme' => 'organisme', 'reference' => 'reference', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // CommonVisiteLieuxTableMap
