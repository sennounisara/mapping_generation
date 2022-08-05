<?php



/**
 * This class defines the structure of the 'InvitationConsultationTransverse' table.
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
class CommonInvitationConsultationTransverseTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonInvitationConsultationTransverseTableMap';

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
        $this->setName('InvitationConsultationTransverse');
        $this->setPhpName('CommonInvitationConsultationTransverse');
        $this->setClassname('CommonInvitationConsultationTransverse');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('organisme_emetteur', 'OrganismeEmetteur', 'VARCHAR', true, 30, '');
        $this->addColumn('reference', 'Reference', 'VARCHAR', true, 255, '');
        $this->addColumn('organisme_invite', 'OrganismeInvite', 'VARCHAR', true, 30, '');
        $this->addColumn('lot', 'Lot', 'INTEGER', true, null, 0);
        $this->addColumn('date_decision', 'DateDecision', 'DATE', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonInvitationConsultationTransverseTableMap
