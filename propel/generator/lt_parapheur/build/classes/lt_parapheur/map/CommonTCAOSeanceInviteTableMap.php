<?php



/**
 * This class defines the structure of the 't_CAO_Seance_Invite' table.
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
class CommonTCAOSeanceInviteTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonTCAOSeanceInviteTableMap';

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
        $this->setName('t_CAO_Seance_Invite');
        $this->setPhpName('CommonTCAOSeanceInvite');
        $this->setClassname('CommonTCAOSeanceInvite');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_seance_invite', 'IdSeanceInvite', 'BIGINT', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addColumn('id_ordre_de_passage', 'IdOrdreDePassage', 'BIGINT', true, null, null);
        $this->addColumn('id_intervenant_externe', 'IdIntervenantExterne', 'BIGINT', false, null, null);
        $this->addColumn('id_agent', 'IdAgent', 'INTEGER', false, null, null);
        $this->addColumn('id_ref_val_type_voix', 'IdRefValTypeVoix', 'INTEGER', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonTCAOSeanceInviteTableMap
