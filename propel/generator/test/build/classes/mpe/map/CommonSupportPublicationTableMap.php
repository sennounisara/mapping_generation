<?php



/**
 * This class defines the structure of the 'Support_Publication' table.
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
class CommonSupportPublicationTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonSupportPublicationTableMap';

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
        $this->setName('Support_Publication');
        $this->setPhpName('CommonSupportPublication');
        $this->setClassname('CommonSupportPublication');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('nom', 'Nom', 'VARCHAR', true, 255, null);
        $this->addColumn('date_publication', 'DatePublication', 'VARCHAR', true, 20, null);
        $this->addForeignKey('organisme', 'Organisme', 'VARCHAR', 'consultation', 'organisme', true, 30, null);
        $this->addForeignKey('consultation_ref', 'ConsultationRef', 'INTEGER', 'consultation', 'reference', true, null, null);
        $this->addColumn('type_publication', 'TypePublication', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonConsultation', 'CommonConsultation', RelationMap::MANY_TO_ONE, array('organisme' => 'organisme', 'consultation_ref' => 'reference', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // CommonSupportPublicationTableMap
