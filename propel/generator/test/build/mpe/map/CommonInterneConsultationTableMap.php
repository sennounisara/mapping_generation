<?php



/**
 * This class defines the structure of the 'InterneConsultation' table.
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
class CommonInterneConsultationTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonInterneConsultationTableMap';

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
        $this->setName('InterneConsultation');
        $this->setPhpName('CommonInterneConsultation');
        $this->setClassname('CommonInterneConsultation');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignPrimaryKey('organisme', 'Organisme', 'VARCHAR' , 'consultation', 'organisme', true, 30, '');
        $this->addColumn('interne_id', 'InterneId', 'INTEGER', true, null, 0);
        $this->addForeignKey('consultation_ref', 'ConsultationRef', 'INTEGER', 'consultation', 'reference', true, null, 0);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonConsultation', 'CommonConsultation', RelationMap::MANY_TO_ONE, array('organisme' => 'organisme', 'consultation_ref' => 'reference', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // CommonInterneConsultationTableMap
