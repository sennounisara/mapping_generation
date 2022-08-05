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
 * @package    propel.generator.mpe.map
 */
class CommonTCAOSeanceInviteTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonTCAOSeanceInviteTableMap';

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
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_seance_invite', 'IdSeanceInvite', 'BIGINT', true, null, null);
        $this->addForeignPrimaryKey('organisme', 'Organisme', 'VARCHAR' , 'Organisme', 'acronyme', true, 30, null);
        $this->addForeignKey('id_ordre_de_passage', 'IdOrdreDePassage', 'BIGINT', 't_CAO_Ordre_De_Passage', 'id_ordre_de_passage', true, null, null);
        $this->addForeignKey('id_intervenant_externe', 'IdIntervenantExterne', 'BIGINT', 't_CAO_Intervenant_Externe', 'id_intervenant_externe', false, null, null);
        $this->addForeignKey('id_agent', 'IdAgent', 'INTEGER', 'Agent', 'id', false, null, null);
        $this->addColumn('id_ref_val_type_voix', 'IdRefValTypeVoix', 'INTEGER', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonAgent', 'CommonAgent', RelationMap::MANY_TO_ONE, array('id_agent' => 'id', ), null, null);
        $this->addRelation('CommonTCAOIntervenantExterne', 'CommonTCAOIntervenantExterne', RelationMap::MANY_TO_ONE, array('id_intervenant_externe' => 'id_intervenant_externe', ), null, null);
        $this->addRelation('CommonTCAOOrdreDePassage', 'CommonTCAOOrdreDePassage', RelationMap::MANY_TO_ONE, array('id_ordre_de_passage' => 'id_ordre_de_passage', ), null, null);
        $this->addRelation('CommonOrganisme', 'CommonOrganisme', RelationMap::MANY_TO_ONE, array('organisme' => 'acronyme', ), null, null);
    } // buildRelations()

} // CommonTCAOSeanceInviteTableMap
