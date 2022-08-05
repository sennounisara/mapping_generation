<?php



/**
 * This class defines the structure of the 'DocumentExterne' table.
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
class CommonDocumentExterneTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonDocumentExterneTableMap';

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
        $this->setName('DocumentExterne');
        $this->setPhpName('CommonDocumentExterne');
        $this->setClassname('CommonDocumentExterne');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('refConsultation', 'Refconsultation', 'INTEGER', 'consultation', 'reference', false, null, null);
        $this->addForeignPrimaryKey('organisme', 'Organisme', 'VARCHAR' , 'consultation', 'organisme', true, 30, '');
        $this->addColumn('idBlob', 'Idblob', 'INTEGER', false, null, null);
        $this->addColumn('idEntreprise', 'Identreprise', 'INTEGER', false, null, null);
        $this->addColumn('type', 'Type', 'INTEGER', false, null, null);
        $this->addColumn('nom', 'Nom', 'VARCHAR', true, 255, '');
        $this->addColumn('description', 'Description', 'CLOB', true, null, null);
        $this->addColumn('date', 'Date', 'DATE', true, null, '0000-00-00');
        $this->addColumn('lot', 'Lot', 'INTEGER', true, null, 0);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonConsultation', 'CommonConsultation', RelationMap::MANY_TO_ONE, array('organisme' => 'organisme', 'refConsultation' => 'reference', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // CommonDocumentExterneTableMap
