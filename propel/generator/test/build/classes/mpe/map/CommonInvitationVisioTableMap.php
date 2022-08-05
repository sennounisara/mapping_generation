<?php



/**
 * This class defines the structure of the 'invitation_visio' table.
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
class CommonInvitationVisioTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonInvitationVisioTableMap';

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
        $this->setName('invitation_visio');
        $this->setPhpName('CommonInvitationVisio');
        $this->setClassname('CommonInvitationVisio');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('organisme', 'Organisme', 'VARCHAR', true, 30, '');
        $this->addColumn('interne_id', 'InterneId', 'INTEGER', true, null, 0);
        $this->addColumn('consultation_ref', 'ConsultationRef', 'INTEGER', true, null, 0);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonInvitationVisioTableMap
