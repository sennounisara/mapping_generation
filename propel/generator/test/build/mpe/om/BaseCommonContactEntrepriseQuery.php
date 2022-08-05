<?php


/**
 * Base class that represents a query for the 'Contact_Entreprise' table.
 *
 * 
 *
 * @method CommonContactEntrepriseQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonContactEntrepriseQuery orderByIdEntreprise($order = Criteria::ASC) Order by the id_entreprise column
 * @method CommonContactEntrepriseQuery orderByNom($order = Criteria::ASC) Order by the nom column
 * @method CommonContactEntrepriseQuery orderByPrenom($order = Criteria::ASC) Order by the prenom column
 * @method CommonContactEntrepriseQuery orderByAdresse($order = Criteria::ASC) Order by the adresse column
 * @method CommonContactEntrepriseQuery orderByAdresseSuite($order = Criteria::ASC) Order by the adresse_suite column
 * @method CommonContactEntrepriseQuery orderByCodepostal($order = Criteria::ASC) Order by the codepostal column
 * @method CommonContactEntrepriseQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method CommonContactEntrepriseQuery orderByVille($order = Criteria::ASC) Order by the ville column
 * @method CommonContactEntrepriseQuery orderByFonction($order = Criteria::ASC) Order by the fonction column
 * @method CommonContactEntrepriseQuery orderByTelephone($order = Criteria::ASC) Order by the telephone column
 *
 * @method CommonContactEntrepriseQuery groupById() Group by the id column
 * @method CommonContactEntrepriseQuery groupByIdEntreprise() Group by the id_entreprise column
 * @method CommonContactEntrepriseQuery groupByNom() Group by the nom column
 * @method CommonContactEntrepriseQuery groupByPrenom() Group by the prenom column
 * @method CommonContactEntrepriseQuery groupByAdresse() Group by the adresse column
 * @method CommonContactEntrepriseQuery groupByAdresseSuite() Group by the adresse_suite column
 * @method CommonContactEntrepriseQuery groupByCodepostal() Group by the codepostal column
 * @method CommonContactEntrepriseQuery groupByEmail() Group by the email column
 * @method CommonContactEntrepriseQuery groupByVille() Group by the ville column
 * @method CommonContactEntrepriseQuery groupByFonction() Group by the fonction column
 * @method CommonContactEntrepriseQuery groupByTelephone() Group by the telephone column
 *
 * @method CommonContactEntrepriseQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonContactEntrepriseQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonContactEntrepriseQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonContactEntrepriseQuery leftJoinCommonEntreprise($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonEntreprise relation
 * @method CommonContactEntrepriseQuery rightJoinCommonEntreprise($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonEntreprise relation
 * @method CommonContactEntrepriseQuery innerJoinCommonEntreprise($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonEntreprise relation
 *
 * @method CommonContactEntreprise findOne(PropelPDO $con = null) Return the first CommonContactEntreprise matching the query
 * @method CommonContactEntreprise findOneOrCreate(PropelPDO $con = null) Return the first CommonContactEntreprise matching the query, or a new CommonContactEntreprise object populated from the query conditions when no match is found
 *
 * @method CommonContactEntreprise findOneByIdEntreprise(int $id_entreprise) Return the first CommonContactEntreprise filtered by the id_entreprise column
 * @method CommonContactEntreprise findOneByNom(string $nom) Return the first CommonContactEntreprise filtered by the nom column
 * @method CommonContactEntreprise findOneByPrenom(string $prenom) Return the first CommonContactEntreprise filtered by the prenom column
 * @method CommonContactEntreprise findOneByAdresse(string $adresse) Return the first CommonContactEntreprise filtered by the adresse column
 * @method CommonContactEntreprise findOneByAdresseSuite(string $adresse_suite) Return the first CommonContactEntreprise filtered by the adresse_suite column
 * @method CommonContactEntreprise findOneByCodepostal(string $codepostal) Return the first CommonContactEntreprise filtered by the codepostal column
 * @method CommonContactEntreprise findOneByEmail(string $email) Return the first CommonContactEntreprise filtered by the email column
 * @method CommonContactEntreprise findOneByVille(string $ville) Return the first CommonContactEntreprise filtered by the ville column
 * @method CommonContactEntreprise findOneByFonction(string $fonction) Return the first CommonContactEntreprise filtered by the fonction column
 * @method CommonContactEntreprise findOneByTelephone(string $telephone) Return the first CommonContactEntreprise filtered by the telephone column
 *
 * @method array findById(int $id) Return CommonContactEntreprise objects filtered by the id column
 * @method array findByIdEntreprise(int $id_entreprise) Return CommonContactEntreprise objects filtered by the id_entreprise column
 * @method array findByNom(string $nom) Return CommonContactEntreprise objects filtered by the nom column
 * @method array findByPrenom(string $prenom) Return CommonContactEntreprise objects filtered by the prenom column
 * @method array findByAdresse(string $adresse) Return CommonContactEntreprise objects filtered by the adresse column
 * @method array findByAdresseSuite(string $adresse_suite) Return CommonContactEntreprise objects filtered by the adresse_suite column
 * @method array findByCodepostal(string $codepostal) Return CommonContactEntreprise objects filtered by the codepostal column
 * @method array findByEmail(string $email) Return CommonContactEntreprise objects filtered by the email column
 * @method array findByVille(string $ville) Return CommonContactEntreprise objects filtered by the ville column
 * @method array findByFonction(string $fonction) Return CommonContactEntreprise objects filtered by the fonction column
 * @method array findByTelephone(string $telephone) Return CommonContactEntreprise objects filtered by the telephone column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonContactEntrepriseQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonContactEntrepriseQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonContactEntreprise', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonContactEntrepriseQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonContactEntrepriseQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonContactEntrepriseQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonContactEntrepriseQuery) {
            return $criteria;
        }
        $query = new CommonContactEntrepriseQuery();
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
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query 
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonContactEntreprise|CommonContactEntreprise[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonContactEntreprisePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonContactEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonContactEntreprise A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneById($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonContactEntreprise A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_entreprise`, `nom`, `prenom`, `adresse`, `adresse_suite`, `codepostal`, `email`, `ville`, `fonction`, `telephone` FROM `Contact_Entreprise` WHERE `id` = :p0';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonContactEntreprise();
            $obj->hydrate($row);
            CommonContactEntreprisePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonContactEntreprise|CommonContactEntreprise[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CommonContactEntreprise[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonContactEntrepriseQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonContactEntreprisePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonContactEntrepriseQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonContactEntreprisePeer::ID, $keys, Criteria::IN);
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
     * @return CommonContactEntrepriseQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonContactEntreprisePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonContactEntreprisePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonContactEntreprisePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntreprise(1234); // WHERE id_entreprise = 1234
     * $query->filterByIdEntreprise(array(12, 34)); // WHERE id_entreprise IN (12, 34)
     * $query->filterByIdEntreprise(array('min' => 12)); // WHERE id_entreprise >= 12
     * $query->filterByIdEntreprise(array('max' => 12)); // WHERE id_entreprise <= 12
     * </code>
     *
     * @see       filterByCommonEntreprise()
     *
     * @param     mixed $idEntreprise The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonContactEntrepriseQuery The current query, for fluid interface
     */
    public function filterByIdEntreprise($idEntreprise = null, $comparison = null)
    {
        if (is_array($idEntreprise)) {
            $useMinMax = false;
            if (isset($idEntreprise['min'])) {
                $this->addUsingAlias(CommonContactEntreprisePeer::ID_ENTREPRISE, $idEntreprise['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntreprise['max'])) {
                $this->addUsingAlias(CommonContactEntreprisePeer::ID_ENTREPRISE, $idEntreprise['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonContactEntreprisePeer::ID_ENTREPRISE, $idEntreprise, $comparison);
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
     * @return CommonContactEntrepriseQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonContactEntreprisePeer::NOM, $nom, $comparison);
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
     * @return CommonContactEntrepriseQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonContactEntreprisePeer::PRENOM, $prenom, $comparison);
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
     * @return CommonContactEntrepriseQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonContactEntreprisePeer::ADRESSE, $adresse, $comparison);
    }

    /**
     * Filter the query on the adresse_suite column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseSuite('fooValue');   // WHERE adresse_suite = 'fooValue'
     * $query->filterByAdresseSuite('%fooValue%'); // WHERE adresse_suite LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseSuite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonContactEntrepriseQuery The current query, for fluid interface
     */
    public function filterByAdresseSuite($adresseSuite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseSuite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseSuite)) {
                $adresseSuite = str_replace('*', '%', $adresseSuite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonContactEntreprisePeer::ADRESSE_SUITE, $adresseSuite, $comparison);
    }

    /**
     * Filter the query on the codepostal column
     *
     * Example usage:
     * <code>
     * $query->filterByCodepostal('fooValue');   // WHERE codepostal = 'fooValue'
     * $query->filterByCodepostal('%fooValue%'); // WHERE codepostal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codepostal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonContactEntrepriseQuery The current query, for fluid interface
     */
    public function filterByCodepostal($codepostal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codepostal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codepostal)) {
                $codepostal = str_replace('*', '%', $codepostal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonContactEntreprisePeer::CODEPOSTAL, $codepostal, $comparison);
    }

    /**
     * Filter the query on the email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
     * $query->filterByEmail('%fooValue%'); // WHERE email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonContactEntrepriseQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $email)) {
                $email = str_replace('*', '%', $email);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonContactEntreprisePeer::EMAIL, $email, $comparison);
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
     * @return CommonContactEntrepriseQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonContactEntreprisePeer::VILLE, $ville, $comparison);
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
     * @return CommonContactEntrepriseQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonContactEntreprisePeer::FONCTION, $fonction, $comparison);
    }

    /**
     * Filter the query on the telephone column
     *
     * Example usage:
     * <code>
     * $query->filterByTelephone('fooValue');   // WHERE telephone = 'fooValue'
     * $query->filterByTelephone('%fooValue%'); // WHERE telephone LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telephone The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonContactEntrepriseQuery The current query, for fluid interface
     */
    public function filterByTelephone($telephone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telephone)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telephone)) {
                $telephone = str_replace('*', '%', $telephone);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonContactEntreprisePeer::TELEPHONE, $telephone, $comparison);
    }

    /**
     * Filter the query by a related CommonEntreprise object
     *
     * @param   CommonEntreprise|PropelObjectCollection $commonEntreprise The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonContactEntrepriseQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonEntreprise($commonEntreprise, $comparison = null)
    {
        if ($commonEntreprise instanceof CommonEntreprise) {
            return $this
                ->addUsingAlias(CommonContactEntreprisePeer::ID_ENTREPRISE, $commonEntreprise->getId(), $comparison);
        } elseif ($commonEntreprise instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonContactEntreprisePeer::ID_ENTREPRISE, $commonEntreprise->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonEntreprise() only accepts arguments of type CommonEntreprise or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonEntreprise relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonContactEntrepriseQuery The current query, for fluid interface
     */
    public function joinCommonEntreprise($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonEntreprise');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonEntreprise');
        }

        return $this;
    }

    /**
     * Use the CommonEntreprise relation CommonEntreprise object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonEntrepriseQuery A secondary query class using the current class as primary query
     */
    public function useCommonEntrepriseQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonEntreprise($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonEntreprise', 'CommonEntrepriseQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonContactEntreprise $commonContactEntreprise Object to remove from the list of results
     *
     * @return CommonContactEntrepriseQuery The current query, for fluid interface
     */
    public function prune($commonContactEntreprise = null)
    {
        if ($commonContactEntreprise) {
            $this->addUsingAlias(CommonContactEntreprisePeer::ID, $commonContactEntreprise->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
