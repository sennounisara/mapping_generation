<?php


/**
 * Base class that represents a query for the 'backup_Intervenant_Externe' table.
 *
 * 
 *
 * @method CommonBackupIntervenantExterneQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonBackupIntervenantExterneQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonBackupIntervenantExterneQuery orderByNom($order = Criteria::ASC) Order by the nom column
 * @method CommonBackupIntervenantExterneQuery orderByPrenom($order = Criteria::ASC) Order by the prenom column
 * @method CommonBackupIntervenantExterneQuery orderByOrganisation($order = Criteria::ASC) Order by the organisation column
 * @method CommonBackupIntervenantExterneQuery orderByFonction($order = Criteria::ASC) Order by the fonction column
 * @method CommonBackupIntervenantExterneQuery orderByAdresse($order = Criteria::ASC) Order by the adresse column
 * @method CommonBackupIntervenantExterneQuery orderByCodePostal($order = Criteria::ASC) Order by the code_postal column
 * @method CommonBackupIntervenantExterneQuery orderByVille($order = Criteria::ASC) Order by the ville column
 * @method CommonBackupIntervenantExterneQuery orderByMail($order = Criteria::ASC) Order by the mail column
 * @method CommonBackupIntervenantExterneQuery orderByTypeInvitation($order = Criteria::ASC) Order by the type_invitation column
 * @method CommonBackupIntervenantExterneQuery orderByCivilite($order = Criteria::ASC) Order by the civilite column
 * @method CommonBackupIntervenantExterneQuery orderByTypeVoix($order = Criteria::ASC) Order by the type_voix column
 *
 * @method CommonBackupIntervenantExterneQuery groupById() Group by the id column
 * @method CommonBackupIntervenantExterneQuery groupByOrganisme() Group by the organisme column
 * @method CommonBackupIntervenantExterneQuery groupByNom() Group by the nom column
 * @method CommonBackupIntervenantExterneQuery groupByPrenom() Group by the prenom column
 * @method CommonBackupIntervenantExterneQuery groupByOrganisation() Group by the organisation column
 * @method CommonBackupIntervenantExterneQuery groupByFonction() Group by the fonction column
 * @method CommonBackupIntervenantExterneQuery groupByAdresse() Group by the adresse column
 * @method CommonBackupIntervenantExterneQuery groupByCodePostal() Group by the code_postal column
 * @method CommonBackupIntervenantExterneQuery groupByVille() Group by the ville column
 * @method CommonBackupIntervenantExterneQuery groupByMail() Group by the mail column
 * @method CommonBackupIntervenantExterneQuery groupByTypeInvitation() Group by the type_invitation column
 * @method CommonBackupIntervenantExterneQuery groupByCivilite() Group by the civilite column
 * @method CommonBackupIntervenantExterneQuery groupByTypeVoix() Group by the type_voix column
 *
 * @method CommonBackupIntervenantExterneQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonBackupIntervenantExterneQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonBackupIntervenantExterneQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonBackupIntervenantExterne findOne(PropelPDO $con = null) Return the first CommonBackupIntervenantExterne matching the query
 * @method CommonBackupIntervenantExterne findOneOrCreate(PropelPDO $con = null) Return the first CommonBackupIntervenantExterne matching the query, or a new CommonBackupIntervenantExterne object populated from the query conditions when no match is found
 *
 * @method CommonBackupIntervenantExterne findOneById(int $id) Return the first CommonBackupIntervenantExterne filtered by the id column
 * @method CommonBackupIntervenantExterne findOneByOrganisme(string $organisme) Return the first CommonBackupIntervenantExterne filtered by the organisme column
 * @method CommonBackupIntervenantExterne findOneByNom(string $nom) Return the first CommonBackupIntervenantExterne filtered by the nom column
 * @method CommonBackupIntervenantExterne findOneByPrenom(string $prenom) Return the first CommonBackupIntervenantExterne filtered by the prenom column
 * @method CommonBackupIntervenantExterne findOneByOrganisation(string $organisation) Return the first CommonBackupIntervenantExterne filtered by the organisation column
 * @method CommonBackupIntervenantExterne findOneByFonction(string $fonction) Return the first CommonBackupIntervenantExterne filtered by the fonction column
 * @method CommonBackupIntervenantExterne findOneByAdresse(string $adresse) Return the first CommonBackupIntervenantExterne filtered by the adresse column
 * @method CommonBackupIntervenantExterne findOneByCodePostal(string $code_postal) Return the first CommonBackupIntervenantExterne filtered by the code_postal column
 * @method CommonBackupIntervenantExterne findOneByVille(string $ville) Return the first CommonBackupIntervenantExterne filtered by the ville column
 * @method CommonBackupIntervenantExterne findOneByMail(string $mail) Return the first CommonBackupIntervenantExterne filtered by the mail column
 * @method CommonBackupIntervenantExterne findOneByTypeInvitation(int $type_invitation) Return the first CommonBackupIntervenantExterne filtered by the type_invitation column
 * @method CommonBackupIntervenantExterne findOneByCivilite(string $civilite) Return the first CommonBackupIntervenantExterne filtered by the civilite column
 * @method CommonBackupIntervenantExterne findOneByTypeVoix(string $type_voix) Return the first CommonBackupIntervenantExterne filtered by the type_voix column
 *
 * @method array findById(int $id) Return CommonBackupIntervenantExterne objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonBackupIntervenantExterne objects filtered by the organisme column
 * @method array findByNom(string $nom) Return CommonBackupIntervenantExterne objects filtered by the nom column
 * @method array findByPrenom(string $prenom) Return CommonBackupIntervenantExterne objects filtered by the prenom column
 * @method array findByOrganisation(string $organisation) Return CommonBackupIntervenantExterne objects filtered by the organisation column
 * @method array findByFonction(string $fonction) Return CommonBackupIntervenantExterne objects filtered by the fonction column
 * @method array findByAdresse(string $adresse) Return CommonBackupIntervenantExterne objects filtered by the adresse column
 * @method array findByCodePostal(string $code_postal) Return CommonBackupIntervenantExterne objects filtered by the code_postal column
 * @method array findByVille(string $ville) Return CommonBackupIntervenantExterne objects filtered by the ville column
 * @method array findByMail(string $mail) Return CommonBackupIntervenantExterne objects filtered by the mail column
 * @method array findByTypeInvitation(int $type_invitation) Return CommonBackupIntervenantExterne objects filtered by the type_invitation column
 * @method array findByCivilite(string $civilite) Return CommonBackupIntervenantExterne objects filtered by the civilite column
 * @method array findByTypeVoix(string $type_voix) Return CommonBackupIntervenantExterne objects filtered by the type_voix column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonBackupIntervenantExterneQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonBackupIntervenantExterneQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonBackupIntervenantExterne', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonBackupIntervenantExterneQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonBackupIntervenantExterneQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonBackupIntervenantExterneQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonBackupIntervenantExterneQuery) {
            return $criteria;
        }
        $query = new CommonBackupIntervenantExterneQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query 
                         A Primary key composition: [$id, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonBackupIntervenantExterne|CommonBackupIntervenantExterne[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonBackupIntervenantExternePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonBackupIntervenantExternePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonBackupIntervenantExterne A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `nom`, `prenom`, `organisation`, `fonction`, `adresse`, `code_postal`, `ville`, `mail`, `type_invitation`, `civilite`, `type_voix` FROM `backup_Intervenant_Externe` WHERE `id` = :p0 AND `organisme` = :p1';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonBackupIntervenantExterne();
            $obj->hydrate($row);
            CommonBackupIntervenantExternePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return CommonBackupIntervenantExterne|CommonBackupIntervenantExterne[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CommonBackupIntervenantExterne[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return CommonBackupIntervenantExterneQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonBackupIntervenantExternePeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonBackupIntervenantExternePeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonBackupIntervenantExterneQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonBackupIntervenantExternePeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonBackupIntervenantExternePeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id >= 12
     * $query->filterById(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupIntervenantExterneQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonBackupIntervenantExternePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonBackupIntervenantExternePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonBackupIntervenantExternePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the organisme column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganisme('fooValue');   // WHERE organisme = 'fooValue'
     * $query->filterByOrganisme('%fooValue%'); // WHERE organisme LIKE '%fooValue%'
     * </code>
     *
     * @param     string $organisme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupIntervenantExterneQuery The current query, for fluid interface
     */
    public function filterByOrganisme($organisme = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($organisme)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $organisme)) {
                $organisme = str_replace('*', '%', $organisme);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonBackupIntervenantExternePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the nom column
     *
     * Example usage:
     * <code>
     * $query->filterByNom('fooValue');   // WHERE nom = 'fooValue'
     * $query->filterByNom('%fooValue%'); // WHERE nom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupIntervenantExterneQuery The current query, for fluid interface
     */
    public function filterByNom($nom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nom)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nom)) {
                $nom = str_replace('*', '%', $nom);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonBackupIntervenantExternePeer::NOM, $nom, $comparison);
    }

    /**
     * Filter the query on the prenom column
     *
     * Example usage:
     * <code>
     * $query->filterByPrenom('fooValue');   // WHERE prenom = 'fooValue'
     * $query->filterByPrenom('%fooValue%'); // WHERE prenom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prenom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupIntervenantExterneQuery The current query, for fluid interface
     */
    public function filterByPrenom($prenom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prenom)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prenom)) {
                $prenom = str_replace('*', '%', $prenom);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonBackupIntervenantExternePeer::PRENOM, $prenom, $comparison);
    }

    /**
     * Filter the query on the organisation column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganisation('fooValue');   // WHERE organisation = 'fooValue'
     * $query->filterByOrganisation('%fooValue%'); // WHERE organisation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $organisation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupIntervenantExterneQuery The current query, for fluid interface
     */
    public function filterByOrganisation($organisation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($organisation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $organisation)) {
                $organisation = str_replace('*', '%', $organisation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonBackupIntervenantExternePeer::ORGANISATION, $organisation, $comparison);
    }

    /**
     * Filter the query on the fonction column
     *
     * Example usage:
     * <code>
     * $query->filterByFonction('fooValue');   // WHERE fonction = 'fooValue'
     * $query->filterByFonction('%fooValue%'); // WHERE fonction LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fonction The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupIntervenantExterneQuery The current query, for fluid interface
     */
    public function filterByFonction($fonction = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fonction)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fonction)) {
                $fonction = str_replace('*', '%', $fonction);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonBackupIntervenantExternePeer::FONCTION, $fonction, $comparison);
    }

    /**
     * Filter the query on the adresse column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresse('fooValue');   // WHERE adresse = 'fooValue'
     * $query->filterByAdresse('%fooValue%'); // WHERE adresse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupIntervenantExterneQuery The current query, for fluid interface
     */
    public function filterByAdresse($adresse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresse)) {
                $adresse = str_replace('*', '%', $adresse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonBackupIntervenantExternePeer::ADRESSE, $adresse, $comparison);
    }

    /**
     * Filter the query on the code_postal column
     *
     * Example usage:
     * <code>
     * $query->filterByCodePostal('fooValue');   // WHERE code_postal = 'fooValue'
     * $query->filterByCodePostal('%fooValue%'); // WHERE code_postal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codePostal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupIntervenantExterneQuery The current query, for fluid interface
     */
    public function filterByCodePostal($codePostal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codePostal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codePostal)) {
                $codePostal = str_replace('*', '%', $codePostal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonBackupIntervenantExternePeer::CODE_POSTAL, $codePostal, $comparison);
    }

    /**
     * Filter the query on the ville column
     *
     * Example usage:
     * <code>
     * $query->filterByVille('fooValue');   // WHERE ville = 'fooValue'
     * $query->filterByVille('%fooValue%'); // WHERE ville LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ville The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupIntervenantExterneQuery The current query, for fluid interface
     */
    public function filterByVille($ville = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ville)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ville)) {
                $ville = str_replace('*', '%', $ville);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonBackupIntervenantExternePeer::VILLE, $ville, $comparison);
    }

    /**
     * Filter the query on the mail column
     *
     * Example usage:
     * <code>
     * $query->filterByMail('fooValue');   // WHERE mail = 'fooValue'
     * $query->filterByMail('%fooValue%'); // WHERE mail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupIntervenantExterneQuery The current query, for fluid interface
     */
    public function filterByMail($mail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mail)) {
                $mail = str_replace('*', '%', $mail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonBackupIntervenantExternePeer::MAIL, $mail, $comparison);
    }

    /**
     * Filter the query on the type_invitation column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeInvitation(1234); // WHERE type_invitation = 1234
     * $query->filterByTypeInvitation(array(12, 34)); // WHERE type_invitation IN (12, 34)
     * $query->filterByTypeInvitation(array('min' => 12)); // WHERE type_invitation >= 12
     * $query->filterByTypeInvitation(array('max' => 12)); // WHERE type_invitation <= 12
     * </code>
     *
     * @param     mixed $typeInvitation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupIntervenantExterneQuery The current query, for fluid interface
     */
    public function filterByTypeInvitation($typeInvitation = null, $comparison = null)
    {
        if (is_array($typeInvitation)) {
            $useMinMax = false;
            if (isset($typeInvitation['min'])) {
                $this->addUsingAlias(CommonBackupIntervenantExternePeer::TYPE_INVITATION, $typeInvitation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeInvitation['max'])) {
                $this->addUsingAlias(CommonBackupIntervenantExternePeer::TYPE_INVITATION, $typeInvitation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonBackupIntervenantExternePeer::TYPE_INVITATION, $typeInvitation, $comparison);
    }

    /**
     * Filter the query on the civilite column
     *
     * Example usage:
     * <code>
     * $query->filterByCivilite('fooValue');   // WHERE civilite = 'fooValue'
     * $query->filterByCivilite('%fooValue%'); // WHERE civilite LIKE '%fooValue%'
     * </code>
     *
     * @param     string $civilite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupIntervenantExterneQuery The current query, for fluid interface
     */
    public function filterByCivilite($civilite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($civilite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $civilite)) {
                $civilite = str_replace('*', '%', $civilite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonBackupIntervenantExternePeer::CIVILITE, $civilite, $comparison);
    }

    /**
     * Filter the query on the type_voix column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeVoix('fooValue');   // WHERE type_voix = 'fooValue'
     * $query->filterByTypeVoix('%fooValue%'); // WHERE type_voix LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeVoix The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupIntervenantExterneQuery The current query, for fluid interface
     */
    public function filterByTypeVoix($typeVoix = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeVoix)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeVoix)) {
                $typeVoix = str_replace('*', '%', $typeVoix);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonBackupIntervenantExternePeer::TYPE_VOIX, $typeVoix, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonBackupIntervenantExterne $commonBackupIntervenantExterne Object to remove from the list of results
     *
     * @return CommonBackupIntervenantExterneQuery The current query, for fluid interface
     */
    public function prune($commonBackupIntervenantExterne = null)
    {
        if ($commonBackupIntervenantExterne) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonBackupIntervenantExternePeer::ID), $commonBackupIntervenantExterne->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonBackupIntervenantExternePeer::ORGANISME), $commonBackupIntervenantExterne->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
